<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Trade;
use App\Models\pbperslist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        } elseif ($sheet_no == 2) {
            $rank = "WO To SWO";
        } else {
            $rank = "Sgt To WO";
        }
        $persons = pbperslist::where('trade', $trade)
            ->where('sheetNo', $sheet_no)
            ->get();
        // dd($persons);
        $totalPersons = $persons->count();
        $totalEntry = pbperslist::SELECT('entry_no', DB::raw('count(*) as pers_count'))
                ->where('trade', $trade)
                ->where('sheetno', $sheet_no)
                ->groupBy('entry_no')
                ->get();
        $entries = '';
        foreach($totalEntry as $item){
            $entries .= $item->entry_no . '(' . $item->pers_count . '), ';
        }
        // dd($totalEntry);
        $currentPb = DB::table('pb_current_estb_str_vac')
                ->where('trade', $trade)
                ->where('sheetno', $sheet_no)
                ->limit(1)
                ->first();
        $nextYrs = DB::table('vac_create_next_yrs')
                ->where('trade', $trade)
                ->where('sheetno', $sheet_no)
                ->limit(1)
                ->first();
        // dd($nextYrs);
        //date function
        function formatDate($rawDate) {
            // Convert to DateTime
            // $date = new DateTime($dateString);
            $formattedDate = Carbon::parse($rawDate)->format('d.m.y');
            // Format as DD.MM.YY
            return $formattedDate;
        }
        $date = date('y');
        if($sheet_no == 1){
            $retd = $date-5;
        } elseif($sheet_no == 2){
            $retd = $date-2;
        } else{
            $retd = $date;
        }
        // Example usage:
        // dd($retd);
        if($sheet_no == 1){
            $display= "";
            $display_promotion="";
            $colspan = 3;
        } else{
            $display= "<th>Exp vac on promotion</th>";
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
                <p style="text-align:center; font-size:12px; color:gray;">CONFINENTIAL</p>
                <span style="text-decoration:underline;">Trade: ' . $trade . '</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Promotion From: ' . $rank . '
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
                                    <th colspan="'.$colspan.'">Vacancies</th>
                                </tr>
                                <tr>
                                    <th>Existing</th>
                                    <th>On Retirement</th>
                                    '.$display.'
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:center;">'.$currentPb->estb.'</td>
                                    <td style="text-align:center;">'.$currentPb->str.'</td>
                                    <td style="text-align:center;">'.$currentPb->exist.'</td>
                                    <td style="text-align:center;">'.$currentPb->retd.' <br>*('.$retd.'th - '.$currentPb->retd.')</td>
                                    '.$display_promotion.'
                                    <td style="text-align:center;">'.$currentPb->ttl.'</td>
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
                                    <td>'.$totalPersons.'</td>
                                </tr>
                                <tr>
                                    <td>Considered Entry</td>
                                    <td>=</td>
                                    <td>'.$entries.'</td>
                                </tr>
                                <tr>
                                    <td>Next aval SWO</td>
                                    <td>=</td>
                                    <td>24(07) &amp; 25(17)</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
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
                    <th rowspan="2">Date of Present rk& dt of retd within yr 24</th>
                    <th rowspan="2">Svc Length</th>
                    <th colspan="2">Svc Length</th>
                    <th rowspan="2">Total Score</th>
                    <th colspan="2">Sr pons as per merit</th>
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
            $html .= '
            <tr>
                <td style="text-align:center;">' . ($index + 1) . '</td>
                <td>
                    <img src="' . public_path('promotionBoard/image/' . ($person->bdno ?? '-') . '.gif') . '"
                        alt="" style="width:60px;">
                </td>
                <td>' . ($person->bdno ?? '-') . '</td>
                <td>' . ($person->rank ?? '-') . '</td>
                <td>' . ($person->name ?? '-') .'<br>'. '(' . ($person->basic_trade ?? '-') . ')' . '</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . formatDate(($person->doe )) . '</span><br>' . ($person->entry_no ?? '-') . ' th</td>
                <td style="text-align:center;"><span style="text-decoration:underline;">' . formatDate(($person->promition_dt)). '</span><br>' . formatDate(($person->dor)) . '</td>
                <td style="text-align:center;">' . ($person->svc_length ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->avg_par ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->career_marks ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->ttl_score ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->es ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->cs ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->red ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->black ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->ltr_of_dis ?? '-') . '</td>
                <td style="text-align:center;">' . ($person->weight ?? '-') . '</td>
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
