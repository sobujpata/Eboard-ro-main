<?php

namespace App\Http\Controllers\Pb;

use Mpdf\Mpdf;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Trade;
use App\Models\pbPersList;
use App\Models\ConductSheet;
use Illuminate\Http\Request;
use App\Exports\PbrecomExport;
use App\Exports\ImageUrlExport;
use App\Exports\SelectedExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    // public function pbRcomExportList(Request $request)
    // {
    //     $trade = $request->trade;

    //     return Excel::download(new PbrecomExport($trade), "{$trade}-pbrecom.xlsx");
    //     // dd($trade);
    // }

    public function pbRcomExportList(Request $request)
    {
        $trade = $request->trade;

        $subQuery = pbPersList::from('pbperslists as us1')
            ->selectRaw("
            us1.*,
            -- rank2: grouped by entry_no, ordered by us1.avg_par + us1.career_marks
            RANK() OVER (
                PARTITION BY us1.entry_no
                ORDER BY (us1.avg_par + us1.career_marks) DESC, us1.bdno ASC
            ) AS rank2,
            -- rank1: grouped by sheetNo, ordered by us1.avg_par + us1.career_marks
            (
                SELECT COUNT(*)
                FROM pbperslists us2
                WHERE
                    us2.trade = ?
                    AND us2.sheetNo = us1.sheetNo
                    AND (
                        (us2.avg_par + us2.career_marks) > (us1.avg_par + us1.career_marks)
                        OR (
                            (us2.avg_par + us2.career_marks) = (us1.avg_par + us1.career_marks)
                            AND us2.bdno < us1.bdno
                        )
                    )
            ) + 1 AS rank1
        ", [$trade])
            ->where('us1.trade', $trade);

        // 1) Get all ranked records
        $allRanked = DB::query()
            ->fromSub($subQuery, 'ranked_full')
            ->get();

        // 2) Count per sheetNo and entry_no for reference
        $sheetCounts = $allRanked->groupBy('sheetNo')->map->count();
        $entryCounts = $allRanked->groupBy('entry_no')->map->count();

        // 3) Filter final results (decision = 'true')
        $persons = $allRanked->where('decision', 'true')->values();

        $recomMWO = pbPersList::where('trade', $trade)
            ->where('decision', 'true')
            ->where('rank', 'SWO')
            ->count();
        $recomSWO = pbPersList::where('trade', $trade)
            ->where('decision', 'true')
            ->where('rank', 'WO')
            ->count();
        $recomSgt = pbPersList::where('trade', $trade)
            ->where('decision', 'true')
            ->where('rank', 'Sgt')
            ->count();

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

        // Set A3 Landscape
        $mpdf = new Mpdf([
            'format' => 'A3-L',
            'margin_top' => 30, // important for header space
            'margin_bottom' => 20,  // keep space for footer
        ]);
        // Define Header (will appear on every page)
        $headerHtml = '
            <div style="text-align:left; font-size:18px; font-weight:bold; margin-bottom:5px;">
                <p style="text-align:center; font-size:12px; color:gray;">CONFIDENTIAL</p>
                <span style="text-decoration:underline;">Trade: ' . $trade . '</span><br>
                <span style="font-size:12px">Total Recommended for Promotion: MWO: ' . $recomMWO . ', SWO: ' . $recomSWO . ', WO: ' . $recomSgt . '</span>
            </div>
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
                    <th colspan="2" style="font-size:11px;">Sr posn as per merit</th>
                    <th colspan="3" style="font-size:11px;">Entries in conduct sheet (Last 03 yrs)</th>
                    <th rowspan="2">Over/ Under Wt (Lbs)</th>
                    <th rowspan="2">Unit</th>
                    <th rowspan="2">Remarks</th>
                </tr>
                <tr style="background-color:#f2f2f2;">
                    <th>Avg PAR</th>
                    <th style="font-size:10px;">Mks of career courses Bas-40% Adv-40% ST-20%</th>
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
            $sheetCount = $sheetCounts[$person->sheetNo] ?? 0;
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
                <td style="text-align:center;"><span style="text-decoration:underline;">' . ($person->rank2 ?? '-') . '</span><br><span style="color:blue;">' . $entry_count . '</span></td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . ($person->rank1 ?? '-') . '</span><br><span style="color:green;">' . $sheetCount . '</span></td>
                <td style="text-align:center;">' . ($red ?? '-') . '</td>
                <td style="text-align:center;">' . ($black ?? '-') . '</td>
                <td style="text-align:center;">' . ($ltr_of_dis ?? '-') . '</td>
                <td style="text-align:center;">' . ($weight) . '</td>
                <td style="text-align:center;">' . ($person->base_unit ?? '-') . '</td>
                <td style="width:15%;">' . ($person->rmks_1. '<br>'.$person->rmks) . '</td>
            </tr>';
        }
        $html .= '
            </tbody>
        </table>
    ';
        // Write to PDF
        $mpdf->WriteHTML($html);
        // Output to browser
        return response($mpdf->Output('"' . $trade . '-booklet.pdf"', 'S'), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $trade . '-booklet.pdf"');
    }

    public function urlGenerator(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $trades = Trade::all();
        return view('pb.image-url-download', compact('trades', 'user'));
    }

    public function urlDownload(Request $request)
    {
        $trade = $request->trade;
        $sheetNo = $request->sheetNo;
        return Excel::download(new ImageUrlExport($trade, $sheetNo), "{$sheetNo}-{$trade}-image-url.xlsx");
    }
}
