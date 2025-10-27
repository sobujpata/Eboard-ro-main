<?php

namespace App\Http\Controllers\Evaluation;

use DateTime;
use Mpdf\Mpdf;
use App\Models\User;
use Carbon\Traits\Date;
use App\Models\EbPerson;
use Illuminate\Http\Request;
use App\Exports\EbListExport;
use App\Imports\EbPersonImport;
use App\Exports\EbStandbyExport;
use App\Exports\EbSelectedExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

class EbPersController extends Controller
{
    public function index(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;

        $persons = EbPerson::where('type', $type)->get();
        $TotalPersons = EbPerson::where('type', $type)->count();
        $SelectedPersons = EbPerson::where('type', $type)->where('decision', 'true')->count();
        $NotSelectedPersons = EbPerson::where('type', $type)
        ->where(function ($query) {
            $query->whereNull('decision')
                ->orWhere('decision', '');
        })
        ->count();

        return view('eb.pers-list', compact('persons', 'userName', 'type', 'TotalPersons', 'SelectedPersons','NotSelectedPersons'));
    }

    public function updateDecision(Request $request, $id)
    {
        $decision = $request->decision;

       $update = EbPerson::where('id', $id)
            ->update(['decision' => $decision]);


        return response()->json(['success', 'Recom Update Successfully.']);
    }

    public function PersUpdate(Request $request, $id){
        $id = $request->id;
        $s_no = $request->input('s_no');
        $bdno = $request->input('bdno');
        $rank = $request->input('rank');
        $name = $request->input('name');
        $trade = $request->input('trade');
        $entry_no = $request->input('entry_no');
        $avg_par = $request->input('avg_par');
        $career_marks = $request->input('career_marks');
        $doe = $request->input('doe');
        $dor = $request->input('dor');
        $conduct_sheet = $request->input('conduct_sheet');
        $base_unit = $request->input('base_unit');
        $rmks_by_ro = $request->input('rmks_by_ro');
        $rmks_by_board = $request->input('rmks_by_board');
        $type = $request->input('type');
        $salient_points = $request->input('salient_points');

        $person = EbPerson::findOrFail($id);

        $person->update([
            's_no' => !empty($s_no) ? $s_no : null,
            'bdno' => !empty($bdno) ? $bdno : null,
            'rank' => !empty($rank) ? $rank : null,
            'name' => !empty($name) ? $name : null,
            'trade' => !empty($trade) ? $trade : null,
            'entry_no' => !empty($entry_no) ? $entry_no : null,
            'avg_par' => !empty($avg_par) ? $avg_par : null,
            'career_marks' => !empty($career_marks) ? $career_marks : null,
            'doe' => !empty($doe) ? $doe : null,
            'dor' => !empty($dor) ? $dor : null,
            'conduct_sheet' => !empty($conduct_sheet) ? $conduct_sheet : null,
            'base_unit' => !empty($base_unit) ? $base_unit : null,
            'type' => !empty($type) ? $type : 0,
            'rmks_by_ro' => !empty($rmks_by_ro) ? $rmks_by_ro : null,
            'rmks_by_board' => !empty($rmks_by_board) ? $rmks_by_board : null,
            'salient_points' => !empty($salient_points) ? $salient_points : null,
        ]);

        return redirect()->back()->with('message', 'Person Update Successfully.');

    }

    public function EbDelete(Request $request, $id){
        // dd($id);
        $person = EbPerson::findOrFail($id);

        $person->delete();

        return redirect()->back()->with('success', 'Deleted Successfully.');
    }
    public function CreatePerson(Request $request){
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.add-new-person', compact('userName'));
    }
    public function Store(Request $request){
        $s_no = $request->input('s_no');
        $bdno = $request->input('bdno');
        $rank = $request->input('rank');
        $name = $request->input('name');
        $trade = $request->input('trade');
        $entry_no = $request->input('entry_no');
        $avg_par = $request->input('avg_par');
        $career_marks = $request->input('career_marks');
        $doe = $request->input('doe');
        $dor = $request->input('dor');
        $conduct_sheet = $request->input('conduct_sheet');
        $base_unit = $request->input('base_unit');
        $rmks_by_ro = $request->input('rmks_by_ro');
        $rmks_by_board = $request->input('rmks_by_board');
        $type = $request->input('type');
        $salient_points = $request->input('salient_points');

        $person = EbPerson::where('bdno', $bdno)->first();
        if($person ==! null){
            return redirect()->back()->with('error', 'Person has already.');
        }
        EbPerson::create([
            's_no' => !empty($s_no) ? $s_no : null,
            'bdno' => !empty($bdno) ? $bdno : null,
            'rank' => !empty($rank) ? $rank : null,
            'name' => !empty($name) ? $name : null,
            'trade' => !empty($trade) ? $trade : null,
            'entry_no' => !empty($entry_no) ? $entry_no : null,
            'avg_par' => !empty($avg_par) ? $avg_par : null,
            'career_marks' => !empty($career_marks) ? $career_marks : null,
            'doe' => !empty($doe) ? $doe : null,
            'dor' => !empty($dor) ? $dor : null,
            'conduct_sheet' => !empty($conduct_sheet) ? $conduct_sheet : null,
            'base_unit' => !empty($base_unit) ? $base_unit : null,
            'type' => !empty($type) ? $type : 0,
            'rmks_by_ro' => !empty($rmks_by_ro) ? $rmks_by_ro : null,
            'rmks_by_board' => !empty($rmks_by_board) ? $rmks_by_board : null,
            'salient_points' => !empty($salient_points) ? $salient_points : null,
        ]);

        return redirect()->back()->with('message', 'Person Created Successfully.');
    }

    public function update(Request $request, $id){
        $id = $request->id;
        $rmks_by_ro = $request->input('rmks_by_ro');
        // dd($rmks_by_ro);
        $rmks_by_board = $request->input('rmks_by_board');
        $decision = $request->input('decision');

        $pers_list=EbPerson::findOrFail($id);

        // Update the record with fallback for null values
        $pers_list->update([
            'rmks_by_ro' => !empty($rmks_by_ro) ? $rmks_by_ro : null,
            'rmks_by_board' => !empty($rmks_by_board) ? $rmks_by_board : null,
            'decision' => !empty($decision) ? $decision : null,
        ]);


        return redirect()->back()->with('success', 'Recom Update Successfully.');
    }


    public function EbSelectedList(){
        return Excel::download(new EbSelectedExport,"Selection_List.xlsx");
    }
    public function EbStandByList(){
        return Excel::download(new EbStandbyExport,"Stanby_List.xlsx");
    }
    public function EbList(){
        return Excel::download(new EbListExport,"Eb_Pers_List.xlsx");
    }

    public function EbPersByPdf(Request $request){
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        // $trades = Trade::get();
        return view('eb.pdf-person-list', compact('user', 'userName'));
    }
    public function EbListPdf(Request $request){
        if($request->decision == 1){
            $persons = EbPerson::all();
            $headerText = "List of airmen";
        }elseif($request->decision == 2){
            $persons = EbPerson::where('type', 0)->get();
            $headerText = "List of airmen applied for retd after completion of 25 yrs or more svc";
        }elseif($request->decision == 3){
            $persons = EbPerson::where('type', 1)->get();
            $headerText = "List of airmen screening from svc after completion of 21 yrs of svc";
        }elseif($request->decision == 4){
            $persons = EbPerson::where('decision','true')->where('type',0)->get();
            $headerText = "List of airmen applied for retd after completion of 25 yrs or more svc";
        }else{
            $persons = EbPerson::where('decision','true')->where('type',1)->get();
            $headerText = "List of airmen screening from svc after completion of 21 yrs of svc";
        }
        $today = new DateTime();
        // Set A3 Landscape
        $mpdf = new Mpdf([
            'format' => 'A4-L',
            // 'margin_top' => 52, // important for header space
            // 'margin_bottom' => 20,  // keep space for footer
        ]);
        $year = Date('Y');
        // Write some HTML content
        $headerHtml = '
            <div style="text-align:center; font-size:12px; color:gray;">
                CONFIDENTIAL
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

        $WriteHTML='<h3 style="color:black; text-align:center; text-decoration:underline; text-transform:uppercase;">Evaluation Board-'.$year.'<br>'.$headerText.'</h3>';
        $WriteHTML.='<table border="1" style="border-collapse: collapse; width: 100%; font-size:12px;">';
        $WriteHTML.='
        <thead style="background-color: #f2f2f2;">
            <tr>
                <th style="width:3%;">Ser No</th>
                <th style="width:5%;">Photo</th>
                <th style="width:5%;">BD No</th>
                <th style="width:5%;">Rank</th>
                <th style="width:15%;">Name</th>
                <th style="width:5%;">Trade</th>
                <th style="width:5%;">Entry No</th>
                <th style="width:7%;">DOE</th>
                <th style="width:4%;">Avg PAR</th>
                <th style="width:5%;">Career Marks</th>
                <th style="width:10%;">Conduct Sheet</th>
                <th style="width:5%;">Ttl Svc During Retd</th>
                <th style="width:7%;">Retd</th>
                <th style="width:20%;">Remarks</th>
                <th style="width:6%;">Decision By Board</th>
            </tr>
        </thead>
        <tbody>
        ';
        foreach($persons as $person){
            $enrollment = DateTime::createFromFormat('d-m-Y', $person->doe);
            $today = new DateTime();
            $diff = $enrollment->diff($today);

            $years = $diff->y+1; // only years
            $month = $diff->m; // only years
            if($person->type == 0){
                $retd_yrs = $years.' Yrs';
            }else{
                $retd_yrs = '21 Yrs';
            }

            if($person->decision == 'true'){
                $decision = '<span style="color:green;">Recom for Retd</span>';
            }elseif($person->decision == 'false'){
                $decision = 'Stanby for Retd';
            }else{
                if($person->type == 0)
                    $decision = 'Not Recom';
                else
                $decision = 'Recom for Retention';
            }
            // dd($enrollment);
            $WriteHTML.='<tr>
                <td style="text-align:center;">'.$person->s_no.'</td>
                <td style="text-align:center;"><img src="'.public_path('evaluation-board/image/'.$person->bdno.'.gif').'" alt="Photo" width="50" height="60"></td>
                <td style="text-align:center;">'.$person->bdno.'</td>
                <td style="text-align:center;">'.$person->rank.'</td>
                <td style="text-align:left; padding-left:5px;">'.$person->name.'</td>
                <td style="text-align:center;">'.$person->trade.'</td>
                <td style="text-align:center;">'.$person->entry_no.'</td>
                <td style="text-align:center;">'.$person->doe.'</td>
                <td style="text-align:center;">'.number_format($person->avg_par, 2).'</td>
                <td style="text-align:center;">'.number_format($person->career_marks, 2).'</td>
                <td style="text-align:center;">'.$person->conduct_sheet.'</td>
                <td style="text-align:center;">'.$retd_yrs.'</td>
                <td style="text-align:center;">'.$person->dor.'</td>
                <td style="text-align:left;">'.(isset($person->rmks_by_ro) ? $person->rmks_by_ro : '').'</td>
                <td style="text-align:center;">'.$decision.'</td>
            </tr>';
        }

        $WriteHTML.='</tbody></table>';
        $mpdf->WriteHTML($WriteHTML);



        // Output to browser
        return response($mpdf->Output('', 'S'), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="example.pdf"');
    }


    public function Summary(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        $counts = EbPerson::selectRaw('type,
                                    SUM(CASE WHEN decision = "true" THEN 1 ELSE 0 END) as selected_count,
                                    SUM(CASE WHEN decision = "false" THEN 1 ELSE 0 END) as not_selected_count,
                                    COUNT(*) as ttl_prs')  // This will count all persons for each type
        ->groupBy('type')
        ->get();

        // For the grand total count of selected and not selected
        $grandTotal = EbPerson::count();  // Assuming decision = true is "selected"
        $grandTotalSelected = EbPerson::where('decision', 'true')->count();  // Assuming decision = true is "selected"
        $grandTotalNotSelected = EbPerson::where('decision', 'false')->count();  // Assuming decision = false is "not selected"

        // dd($counts);
        return view('eb.summary', compact('userName','counts', 'grandTotal', 'grandTotalSelected', 'grandTotalNotSelected'));
    }

    public function fetchPersonsByType(Request $request, $category)
    {
        $type = $request->input('type');

        // Depending on the category, fetch the data
        if ($category == 'total') {
            // Fetch all persons
            $persons = EbPerson::where('type', $type)->get();
        } elseif ($category == 'selected') {
            // Fetch selected persons
            $persons = EbPerson::where('type', $type)
                            ->where('decision', 'true')
                            ->get();
        } elseif ($category == 'not_selected') {
            // Fetch not selected persons
            $persons = EbPerson::where('type', $type)
                            ->where('decision', 'false')
                            ->get();
        }

        // Return the persons data as JSON
        return response()->json([
            'persons' => $persons
        ]);
    }

    public function ImagePage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.image-uload', compact('userName'));
    }
    public function ImageUpload(Request $request){
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('evaluation-board/image'), $fileName);
            }
            return response()->json(['message' => 'Image uploaded successfully!']);
        }

        return response()->json(['message' => 'No Image uploaded'], 400);
    }

    public function DeleteImage() {
        $uploadPath = public_path('evaluation-board/image');
        File::cleanDirectory($uploadPath);
        return response()->json(['message' => 'All files deleted successfully!']);
    }
    public function ProfilePage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.profile-uload', compact('userName'));
    }
    public function ProfileUpload(Request $request){
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('evaluation-board/bioData'), $fileName);
            }
            return response()->json(['message' => 'Profile uploaded successfully!']);
        }

        return response()->json(['message' => 'No Profile uploaded'], 400);
    }

    public function DeleteProfile(){
        $uploadPath = public_path('evaluation-board/bioData');
        File::cleanDirectory($uploadPath);
        return response()->json(['message' => 'All files deleted successfully!']);
    }

    public function ConductSheetPage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.conduct-sheet-upload', compact('userName'));
    }
    public function ConductSheetUpload(Request $request){
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('evaluation-board/conduct-sheet'), $fileName);
            }
            return response()->json(['message' => 'Profile uploaded successfully!']);
        }

        return response()->json(['message' => 'No Profile uploaded'], 400);
    }
    public function DeleteConductSheet(){
        $uploadPath = public_path('evaluation-board/conduct-sheet');
        File::cleanDirectory($uploadPath);
        return response()->json(['message' => 'All files deleted successfully!']);
    }
    public function ApplicationPage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.application-uload', compact('userName'));
    }
    public function ApplicationUpload(Request $request){
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('evaluation-board/indv_application'), $fileName);
            }
            return response()->json(['message' => 'Application uploaded successfully!']);
        }

        return response()->json(['message' => 'No Application uploaded'], 400);
    }
    public function DeleteApplication(){
        $uploadPath = public_path('evaluation-board/indv_application');
        File::cleanDirectory($uploadPath);
        return response()->json(['message' => 'All files deleted successfully!']);
    }
    public function salientPage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.salient-uload', compact('userName'));
    }
    public function ebPersByBdnoForSalientPoint(Request $request){
        $bdno = $request->input('bdno');
        // dd($bdno);
        $person = EbPerson::where('bdno', $bdno)->first();

        if($person == null){
            return response()->json(['error' => 'Person not available.'], 404);
        }

        return response()->json(['person' => $person]);
    }
    public function salientUpload(Request $request){
        $bdno = $request->input('bdno');
        $salient_points = $request->input('salient_point');
        // dd($salient_points);
        $person = EbPerson::where('bdno', $bdno)->first();

        if($person == null){
            return redirect()->route('salientPage')->with('error', "Person not available.");
        }

        $person->update([
            'salient_points'=>$salient_points,
        ]);

        return redirect()->route('salientPage')->with('message', "Salient upload successfully.");
    }

    public function UploadExcelPage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.person-add-by-upload-excel', compact('userName'));
    }

    public function UploadExcel(Request $request)
    {
        $request->validate([
            'file_upload' => 'required|file|mimes:xlsx,xls,csv|max:2048', // 2MB max file size
        ]);

        try {
            Excel::import(new EbPersonImport, $request->file('file_upload'));
            return redirect()->back()->with('message', 'Excel imported successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }

    public function Bdno(Request $request){
        $bdnos = EbPerson::orderBy('bdno', 'ASC')->pluck('bdno');

        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('eb.all-bdno', compact('bdnos', 'userName'));
    }



}
