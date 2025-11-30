<?php

namespace App\Http\Controllers;

use Date;
use DateTime;
use Mpdf\Mpdf;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Trade;
use App\Models\RetdVac;
use App\Models\pbperslist;
use App\Models\ConductSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use app\Helper\Helpers;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        // $userName = $user->userName;
        $trades = Trade::get();
        return view('pb.booklets', compact('user', 'trades'));
    }

    public function BookleteDownload(Request $request)
    {
        // dd($request->all());
        $trade = $request->input('trade');
        $sheet_no = $request->input('sheet_no');
        if ($sheet_no == 1) {
            $rank = "SWO To MWO";
            $forRank = "aval SWO";
        } elseif ($sheet_no == 2) {
            $rank = "WO To SWO";
            $forRank = "WO (03 Entry)";
        } else {
            if ($trade == 'Cy Asst' || $trade == 'Edn Instr') {
                return back()->with('error', 'Invalid sheet number for the selected trade.');
            } else {
                $rank = "Sgt To WO";
                $forRank = "Sgt (03 Entry)";
            }
        }

        $persons = pbPersList::from('pbperslists as us1')
            ->selectRaw("
            us1.*,
            RANK() OVER (
                PARTITION BY us1.entry_no
                ORDER BY (us1.avg_par + us1.career_marks) DESC, us1.bdno ASC
            ) AS rank2,
            (
                SELECT COUNT(*)
                FROM pbperslists us2
                WHERE
                    us2.trade = ?
                    AND us2.sheetNo = ?
                    AND (
                        (us2.avg_par + us2.career_marks) > (us1.avg_par + us1.career_marks)
                        OR (
                            (us2.avg_par + us2.career_marks) = (us1.avg_par + us1.career_marks) AND us2.bdno < us1.bdno)
                    )
            ) + 1 AS rank1
        ", [$trade, $sheet_no])  // ← bindings here
            ->where('us1.trade', $trade)
            ->where('us1.sheetNo', $sheet_no)
            ->orderBy('us1.entry_no')
            ->orderBy('us1.bdno')
            ->get();
        // dd($persons);
        $totalPersons = $persons->count();
        // Count per entry_no
        $entryCounts = $persons->groupBy('entry_no')->map->count();

        $totalEntry = pbperslist::SELECT('entry_no', DB::raw('count(*) as pers_count'))
            ->where('trade', $trade)
            ->where('sheetno', $sheet_no)
            ->groupBy('entry_no')
            ->get();
        // dd($totalEntry);
        $entries = '';
        foreach ($totalEntry as $item) {
            $entries .= $item->entry_no . '(' . $item->pers_count . '), ';
        }
        // dd($totalEntry);
        $currentPb = DB::table('pb_current_estb_str_vac')
            ->where('trade', $trade)
            ->where('sheetno', $sheet_no)
            ->limit(1)
            ->first();
        $currentExist = $currentPb->exist;
        if (strpos($currentExist, '-') === 0) {
            $currentExistResult = ltrim($currentExist, '-') . " Surp";
        } else {
            $currentExistResult = $currentExist;
        }
        $nextYrs = DB::table('vac_create_next_yrs')
            ->where('trade', $trade)
            ->where('sheetno', $sheet_no)
            ->limit(1)
            ->first();
        $next_year = substr(date('Y') + 1, -2);
        $next_two_year = substr(date('Y') + 2, -2);
        // dd($next_year);
        //date function
        function formatDate($rawDate)
        {
            // Convert to DateTime
            // $date = new DateTime($dateString);
            $formattedDate = Carbon::parse($rawDate)->format('d.m.y');
            // Format as DD.MM.YY
            return $formattedDate;
        }
        $vac_on_retd = RetdVac::where('trade', $trade)
            ->where('sheet_no', $sheet_no)
            ->get();
        $date = date('y');
        if ($sheet_no == 1) {
            if ($trade == 'Cy Asst' || $trade == 'Edn Instr') {
                $values = [];
                foreach ($vac_on_retd as $vac) {
                    $values[] = $vac->entry_no . 'th-' . $vac->vac_on_retd;
                }
                $retd = implode(', ', $values);
            } else {
                $retd = $date - 5 . 'th-' . $currentPb->retd;
            }
        } elseif ($sheet_no == 2) {
            if ($trade == 'Cy Asst' || $trade == 'Edn Instr') {
                $values = [];

                foreach ($vac_on_retd as $vac) {
                    $values[] = $vac->entry_no . 'th-' . $vac->vac_on_retd;
                }

                $retd = !empty($values) ? implode(', ', $values) : 0;
            } else {
                $retd = $date - 2 . 'th-' . $currentPb->retd;
            }
        } else {
            $retd = $date . 'th-' . $currentPb->retd;
        }
        // Example usage:
        if ($sheet_no == 1) {
            $display = "";
            $display_promotion = "";
            $colspan = 3;
        } else {
            $display = "<th>Exp vac on promotion</th>";
            $display_promotion = "<td style='text-align:center;'>$currentPb->promoted_pre_pb</td>";
            $colspan = 4;
        }
        // Set A3 Landscape
        $mpdf = new Mpdf([
            'format' => 'A3-L',
            'margin_top' => 52, // important for header space
            'margin_bottom' => 20,  // keep space for footer
        ]);
        // Define Header (will appear on every page)
        $headerHtml = '

            <div style="text-align:left; font-size:18px; font-weight:bold; margin-bottom:5px;">
                <p style="text-align:center; font-size:12px; color:gray;">CONFIDENTIAL</p>
                <span style="text-decoration:underline;">Trade: ' . $trade . '</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Promotion From : ' . $rank . '
            </div>

            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="10%"></td>
                    <td width="40%" valign="top">
                        <table border="1" cellpadding="4" cellspacing="0"
                            style="border-collapse:collapse; font-size:12px; width:100%;">
                            <thead>
                                <tr>
                                    <th rowspan="2">Estb</th>
                                    <th rowspan="2">Str</th>
                                    <th colspan="' . $colspan . '">Vacancies</th>
                                </tr>
                                <tr>
                                    <th>Existing</th>
                                    <th>On Retirement</th>
                                    ' . $display . '
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">' . $currentPb->estb . '</td>
                                    <td style="text-align:center;">' . $currentPb->str . '</td>
                                    <td style="text-align:center;">' . $currentExistResult . '</td>
                                    <td style="text-align:center;">' . $currentPb->retd . ' <br>*(' . $retd . ')</td>
                                    ' . $display_promotion . '
                                    <td style="text-align:center;">' . $currentPb->ttl . '</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="30%"></td>
                    <td width="20%" valign="top" style="padding-left:10px;">
                        <table border="none" cellpadding="4" cellspacing="0"
                            style="border-collapse:collapse; font-size:12px; width:100%;">
                            <tbody>
                                <tr>
                                    <td>No of pers incl</td>
                                    <td>=</td>
                                    <td>' . $totalPersons . '</td>
                                </tr>
                                <tr>
                                    <td>Considered Entry</td>
                                    <td>=</td>
                                    <td>' . $entries . '</td>
                                </tr>
                                <tr>
                                    <td>Next ' . $forRank . '</td>
                                    <td>=</td>
                                    <td>' . $nextYrs->remarks . '</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:green;">' . $currentPb->remarks . '</span>
        ';
        $mpdf->SetHTMLHeader($headerHtml);
        $footerHtml = '
            <div style="text-align:center; font-size:12px; color:gray;">
                Page {PAGENO} of {nbpg}<br>
                CONFIDENTIAL
            </div>
        ';
        $mpdf->SetHTMLFooter($footerHtml);
        // Build table HTML
        $html = '
        <table border="1" cellpadding="6" cellspacing="0" width="100%">
            <thead>
                <tr style="background-color:#f2f2f2;">
                    <th rowspan="2">S/L</th>
                    <th rowspan="2">Photo</th>
                    <th rowspan="2">BD No</th>
                    <th rowspan="2">Rank</th>
                    <th rowspan="2">Name & Basic Trade</th>
                    <th rowspan="2">Date of Enrolment & Entry No</th>
                    <th rowspan="2">Date of Present rk& dt of retd within yr ' . $next_year . '</th>
                    <th rowspan="2">Svc Length</th>
                    <th colspan="2">POINTS</th>
                    <th rowspan="2">Total Score</th>
                    <th colspan="2">Sr posn as per merit</th>
                    <th colspan="3">Entries in conduct sheet (Last 03 yrs)</th>
                    <th rowspan="2">Over/ Under Wt (Lbs)</th>
                    <th rowspan="2">Unit</th>
                    <th rowspan="2">Remarks</th>
                </tr>
                <tr style="background-color:#f2f2f2;">
                    <th>Avg PAR</th>
                    <th>Mks of career courses Bas-40% Adv-40% ST-20%</th>
                    <th>ES</th>
                    <th>CS</th>
                    <th>Red</th>
                    <th>Black</th>
                    <th>Ltr of dis</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($persons as $index => $person) {
            $entry_count = $entryCounts[$person->entry_no] ?? 0;
            if ($person->weight < 0) {
                $weight = "<span style='color:red;'>$person->weight * -1</span>";
            } elseif ($person->weight > 0) {
                $weight = "<span style='color:red;'>+$person->weight</span>";
            } else {
                $weight = "<span style='color:black;'>&plusmn;$person->weight</span>";
            }
            $avg_acr = number_format($person->avg_par, 2);
            $resutls = number_format($person->career_marks, 2);
            $total_scrore = str_pad($avg_acr + $resutls, 2, 0, STR_PAD_RIGHT);

            $conduct = ConductSheet::where('bdno', $person->bdno)->first();

            $red = '-';
            $black = '-';
            $ltr_of_dis = '-';

            if ($conduct) {
                if ($conduct->entry === 'RED') {
                    $red_count = ConductSheet::where('bdno', $person->bdno)
                        ->where('entry', 'RED')
                        ->count();
                    $red = "<span style='text-decoration:underline;'>" . str_pad($red_count, 2, 0, STR_PAD_LEFT) . "</span><br>" . formatDate($conduct->date_of_punishment);
                } elseif ($conduct->entry === 'BLACK') {
                    $black_count = ConductSheet::where('bdno', $person->bdno)
                        ->where('entry', 'BLACK')
                        ->count();
                    $black = "<span style='text-decoration:underline;'>" . str_pad($black_count, 2, 0, STR_PAD_LEFT) . "</span><br>" . formatDate($conduct->date_of_punishment);
                } elseif ($conduct->entry === 'Letter of Displeasure') {
                    $ltr_of_dis_count = ConductSheet::where('bdno', $person->bdno)
                        ->where('entry', 'Letter of Displeasure')
                        ->count();
                    $ltr_of_dis = "<span style='text-decoration:underline;'>" . str_pad($ltr_of_dis_count, 2, 0, STR_PAD_LEFT) . "</span><br>" . formatDate($conduct->date_of_punishment);
                }
            }
            if ($person->decision === 'true') {
                $color = '#CCE5CF';
            } else if ($person->decision === 'false') {
                $color = '#FF937E';
            } else {
                $color = 'white';
            }
            // dd($color);
            $html .= '
            <tr style="background-color:' . $color . ';">
                <td style="text-align:center;">' . ($index + 1) . '</td>
                <td>
                    <img src="' . public_path('promotionBoard/image/' . ($person->bdno ?? '-') . '.gif') . '"
                        alt="" style="width:60px;">
                </td>
                <td>' . ($person->bdno ?? '-') . '</td>
                <td>' . ($person->rank ?? '-') . '</td>
                <td>' . ($person->name ?? '-') . '<br>' . '(' . ($person->basic_trade ?? '-') . ')' . '</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . formatDate(($person->doe)) . '</span><br>' . (ordinal($person->entry_no)) . '</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . formatDate(($person->promotion_dt)) . '</span><br>' . (retairedDate($person->doe, $person->rank)) . '</td>
                <td style="text-align:center;">' . (serviceLength($person->doe)) . '</td>
                <td style="text-align:center;">' . ($avg_acr ?? '-') . '</td>
                <td style="text-align:center;">' . ($resutls ?? '-') . '</td>
                <td style="text-align:center;">' . ($total_scrore ?? '-') . '</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . ($person->rank2 ?? '-') . '</span><br><span style="color:#38A69B;">' . $entry_count . '</span></td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . ($person->rank1 ?? '-') . '</span><br><span style="color:green;">' . $totalPersons . '</span></td>
                <td style="text-align:center;">' . ($red ?? '-') . '</td>
                <td style="text-align:center;">' . ($black ?? '-') . '</td>
                <td style="text-align:center;">' . ($ltr_of_dis ?? '-') . '</td>
                <td style="text-align:center;">' . ($weight) . '</td>
                <td style="text-align:center;">' . ($person->base_unit ?? '-') . '</td>
                <td style="width:15%;">' . ($person->other_rmks ?? '-') . '</td>
            </tr>';
        }
        $html .= '
            </tbody>
        </table>
    ';
        // Write to PDF
        $mpdf->WriteHTML($html);
        // Output to browser
        return response($mpdf->Output('', 'S'), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $trade . '-' . $rank . '-booklet.pdf"');
    }
    public function RecomBookleteDownload(Request $request)
    {
        // dd($request->all());
        $trade = $request->input('trade');
        $sheet_no = $request->input('sheet_no');
        if ($sheet_no == 1) {
            $rank = "SWO To MWO";
            $forRank = "aval SWO";
        } elseif ($sheet_no == 2) {
            $rank = "WO To SWO";
            $forRank = "WO (03 Entry)";
        } else {
            if ($trade == 'Cy Asst' || $trade == 'Edn Instr') {
                return back()->with('error', 'Invalid sheet number for the selected trade.');
            } else {
                $rank = "Sgt To WO";
                $forRank = "Sgt (03 Entry)";
            }
        }

        $subQuery = pbPersList::from('pbperslists as us1')
            ->selectRaw("
        us1.*,
        RANK() OVER (
            PARTITION BY us1.entry_no
            ORDER BY (us1.avg_par + us1.career_marks) DESC, us1.bdno ASC
        ) AS rank2,
        (
            SELECT COUNT(*)
            FROM pbperslists us2
            WHERE
                us2.trade = ?
                AND us2.sheetNo = ?
                AND (
                    (us2.avg_par + us2.career_marks) > (us1.avg_par + us1.career_marks)
                    OR (
                        (us2.avg_par + us2.career_marks) = (us1.avg_par + us1.career_marks)
                        AND us2.bdno < us1.bdno
                    )
                )
        ) + 1 AS rank1
    ", [$trade, $sheet_no])
            ->where('us1.trade', $trade)
            ->where('us1.sheetNo', $sheet_no);

        // 1) Get all ranked records
        $allRanked = DB::query()
            ->fromSub($subQuery, 'ranked_full')
            ->get();

        // 2) Count per entry_no
        $entryCounts = $allRanked->groupBy('entry_no')->map->count();

        // 3) Filter final results (decision = 'true')
        $persons = $allRanked->where('decision', 'true')->values();

        // 4) Total persons
        $totalPersons = $allRanked->count();



        $totalEntry = pbperslist::SELECT('entry_no', DB::raw('count(*) as pers_count'))
            ->where('trade', $trade)
            ->where('sheetno', $sheet_no)
            ->groupBy('entry_no')
            ->get();
        // dd($totalEntry);
        $entries = '';
        foreach ($totalEntry as $item) {
            $entries .= $item->entry_no . '(' . $item->pers_count . '), ';
        }
        // dd($totalEntry);
        $currentPb = DB::table('pb_current_estb_str_vac')
            ->where('trade', $trade)
            ->where('sheetno', $sheet_no)
            ->limit(1)
            ->first();
        $currentExist = $currentPb->exist;
        if (strpos($currentExist, '-') === 0) {
            $currentExistResult = ltrim($currentExist, '-') . " Surp";
        } else {
            $currentExistResult = $currentExist;
        }
        $nextYrs = DB::table('vac_create_next_yrs')
            ->where('trade', $trade)
            ->where('sheetno', $sheet_no)
            ->limit(1)
            ->first();
        $next_year = substr(date('Y') + 1, -2);
        $next_two_year = substr(date('Y') + 2, -2);
        // dd($next_year);
        //date function
        function formatDate($rawDate)
        {
            // Convert to DateTime
            // $date = new DateTime($dateString);
            $formattedDate = Carbon::parse($rawDate)->format('d.m.y');
            // Format as DD.MM.YY
            return $formattedDate;
        }
        $vac_on_retd = RetdVac::where('trade', $trade)
            ->where('sheet_no', $sheet_no)
            ->get();
        $date = date('y');
        if ($sheet_no == 1) {
            if ($trade == 'Cy Asst' || $trade == 'Edn Instr') {
                $values = [];
                foreach ($vac_on_retd as $vac) {
                    $values[] = $vac->entry_no . 'th-' . $vac->vac_on_retd;
                }
                $retd = implode(', ', $values);
            } else {
                $retd = $date - 5 . 'th-' . $currentPb->retd;
            }
        } elseif ($sheet_no == 2) {
            if ($trade == 'Cy Asst' || $trade == 'Edn Instr') {
                $values = [];

                foreach ($vac_on_retd as $vac) {
                    $values[] = $vac->entry_no . 'th-' . $vac->vac_on_retd;
                }

                $retd = !empty($values) ? implode(', ', $values) : 0;
            } else {
                $retd = $date - 2 . 'th-' . $currentPb->retd;
            }
        } else {
            $retd = $date . 'th-' . $currentPb->retd;
        }
        // Example usage:
        if ($sheet_no == 1) {
            $display = "";
            $display_promotion = "";
            $colspan = 3;
        } else {
            $display = "<th>Exp vac on promotion</th>";
            $display_promotion = "<td style='text-align:center;'>$currentPb->promoted_pre_pb</td>";
            $colspan = 4;
        }
        // Set A3 Landscape
        $mpdf = new Mpdf([
            'format' => 'A3-L',
            'margin_top' => 52, // important for header space
            'margin_bottom' => 20,  // keep space for footer
        ]);
        // Define Header (will appear on every page)
        $headerHtml = '

            <div style="text-align:left; font-size:18px; font-weight:bold; margin-bottom:5px;">
                <p style="text-align:center; font-size:12px; color:gray;">CONFIDENTIAL</p>
                <span style="text-decoration:underline;">Trade: ' . $trade . '</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Promotion From : ' . $rank . '
            </div>

            <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="10%"></td>
                    <td width="40%" valign="top">
                        <table border="1" cellpadding="4" cellspacing="0"
                            style="border-collapse:collapse; font-size:12px; width:100%;">
                            <thead>
                                <tr>
                                    <th rowspan="2">Estb</th>
                                    <th rowspan="2">Str</th>
                                    <th colspan="' . $colspan . '">Vacancies</th>
                                </tr>
                                <tr>
                                    <th>Existing</th>
                                    <th>On Retirement</th>
                                    ' . $display . '
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">' . $currentPb->estb . '</td>
                                    <td style="text-align:center;">' . $currentPb->str . '</td>
                                    <td style="text-align:center;">' . $currentExistResult . '</td>
                                    <td style="text-align:center;">' . $currentPb->retd . ' <br>*(' . $retd . ')</td>
                                    ' . $display_promotion . '
                                    <td style="text-align:center;">' . $currentPb->ttl . '</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="30%"></td>
                    <td width="20%" valign="top" style="padding-left:10px;">
                        <table border="none" cellpadding="4" cellspacing="0"
                            style="border-collapse:collapse; font-size:12px; width:100%;">
                            <tbody>
                                <tr>
                                    <td>No of pers incl</td>
                                    <td>=</td>
                                    <td>' . $totalPersons . '</td>
                                </tr>
                                <tr>
                                    <td>Considered Entry</td>
                                    <td>=</td>
                                    <td>' . $entries . '</td>
                                </tr>
                                <tr>
                                    <td>Next ' . $forRank . '</td>
                                    <td>=</td>
                                    <td>' . $nextYrs->remarks . '</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:green;">' . $currentPb->remarks . '</span>
        ';
        $mpdf->SetHTMLHeader($headerHtml);
        $footerHtml = '
            <div style="text-align:center; font-size:12px; color:gray;">
                Page {PAGENO} of {nbpg}<br>
                CONFIDENTIAL
            </div>
        ';
        $mpdf->SetHTMLFooter($footerHtml);
        // Build table HTML
        $html = '
        <table border="1" cellpadding="6" cellspacing="0" width="100%">
            <thead>
                <tr style="background-color:#f2f2f2;">
                    <th rowspan="2">S/L</th>
                    <th rowspan="2">Photo</th>
                    <th rowspan="2">BD No</th>
                    <th rowspan="2">Rank</th>
                    <th rowspan="2">Name & Basic Trade</th>
                    <th rowspan="2">Date of Enrolment & Entry No</th>
                    <th rowspan="2">Date of Present rk& dt of retd within yr ' . $next_year . '</th>
                    <th rowspan="2">Svc Length</th>
                    <th colspan="2">POINTS</th>
                    <th rowspan="2">Total Score</th>
                    <th colspan="2">Sr posn as per merit</th>
                    <th colspan="3">Entries in conduct sheet (Last 03 yrs)</th>
                    <th rowspan="2">Over/ Under Wt (Lbs)</th>
                    <th rowspan="2">Unit</th>
                    <th rowspan="2">Remarks</th>
                </tr>
                <tr style="background-color:#f2f2f2;">
                    <th>Avg PAR</th>
                    <th>Mks of career courses Bas-40% Adv-40% ST-20%</th>
                    <th>ES</th>
                    <th>CS</th>
                    <th>Red</th>
                    <th>Black</th>
                    <th>Ltr of dis</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($persons as $index => $person) {
            $entry_count = $entryCounts[$person->entry_no] ?? 0;
            if ($person->weight < 0) {
                $weight = "<span style='color:red;'>$person->weight * -1</span>";
            } elseif ($person->weight > 0) {
                $weight = "<span style='color:red;'>+$person->weight</span>";
            } else {
                $weight = "<span style='color:black;'>&plusmn;$person->weight</span>";
            }
            $avg_acr = number_format($person->avg_par, 2);
            $resutls = number_format($person->career_marks, 2);
            $total_scrore = str_pad($avg_acr + $resutls, 2, 0, STR_PAD_RIGHT);

            $conduct = ConductSheet::where('bdno', $person->bdno)->first();

            $red = '-';
            $black = '-';
            $ltr_of_dis = '-';

            if ($conduct) {
                if ($conduct->entry === 'RED') {
                    $red_count = ConductSheet::where('bdno', $person->bdno)
                        ->where('entry', 'RED')
                        ->count();
                    $red = "<span style='text-decoration:underline;'>" . str_pad($red_count, 2, 0, STR_PAD_LEFT) . "</span><br>" . formatDate($conduct->date_of_punishment);
                } elseif ($conduct->entry === 'BLACK') {
                    $black_count = ConductSheet::where('bdno', $person->bdno)
                        ->where('entry', 'BLACK')
                        ->count();
                    $black = "<span style='text-decoration:underline;'>" . str_pad($black_count, 2, 0, STR_PAD_LEFT) . "</span><br>" . formatDate($conduct->date_of_punishment);
                } elseif ($conduct->entry === 'Letter of Displeasure') {
                    $ltr_of_dis_count = ConductSheet::where('bdno', $person->bdno)
                        ->where('entry', 'Letter of Displeasure')
                        ->count();
                    $ltr_of_dis = "<span style='text-decoration:underline;'>" . str_pad($ltr_of_dis_count, 2, 0, STR_PAD_LEFT) . "</span><br>" . formatDate($conduct->date_of_punishment);
                }
            }
            $html .= '
            <tr>
                <td style="text-align:center;">' . ($index + 1) . '</td>
                <td>
                    <img src="' . public_path('promotionBoard/image/' . ($person->bdno ?? '-') . '.gif') . '"
                        alt="" style="width:60px;">
                </td>
                <td>' . ($person->bdno ?? '-') . '</td>
                <td>' . ($person->rank ?? '-') . '</td>
                <td>' . ($person->name ?? '-') . '<br>' . '(' . ($person->basic_trade ?? '-') . ')' . '</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . formatDate(($person->doe)) . '</span><br>' . (ordinal($person->entry_no)) . '</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . formatDate(($person->promotion_dt)) . '</span><br>' . (retairedDate($person->doe, $person->rank)) . '</td>
                <td style="text-align:center;">' . (serviceLength($person->doe)) . '</td>
                <td style="text-align:center;">' . ($avg_acr ?? '-') . '</td>
                <td style="text-align:center;">' . ($resutls ?? '-') . '</td>
                <td style="text-align:center;">' . ($total_scrore ?? '-') . '</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . ($person->rank2 ?? '-') . '</span><br><span style="color:#38A69B;">' . $entry_count . '</span></td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . ($person->rank1 ?? '-') . '</span><br><span style="color:green;">' . $totalPersons . '</span></td>
                <td style="text-align:center;">' . ($red ?? '-') . '</td>
                <td style="text-align:center;">' . ($black ?? '-') . '</td>
                <td style="text-align:center;">' . ($ltr_of_dis ?? '-') . '</td>
                <td style="text-align:center;">' . ($weight) . '</td>
                <td style="text-align:center;">' . ($person->base_unit ?? '-') . '</td>
                <td style="width:15%;">' . ($person->other_rmks ?? '-') . '</td>
            </tr>';
        }
        $html .= '
            </tbody>
        </table>
    ';
        // Write to PDF
        $mpdf->WriteHTML($html);
        // Output to browser
        return response($mpdf->Output('', 'S'), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $trade . '-' . $rank . '-booklet.pdf"');
    }
    public function generate()
    {
        $mpdf = new Mpdf();

        // Write some HTML content
        $mpdf->WriteHTML('<h1 style="color:blue;">Hello, Laravel 10 with mPDF!</h1>');

        // Output to browser
        return response($mpdf->Output('', 'S'), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="example.pdf"');
    }
}
