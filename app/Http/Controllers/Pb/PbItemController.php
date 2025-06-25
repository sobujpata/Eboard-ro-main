<?php
namespace App\Http\Controllers\pb;
use App\Models\Rank;
use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\Request;
use App\Imports\PbPersonImport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\pbperslist; // Import the Item model

class PbItemController extends Controller
{
    public function updateDecision(Request $request, $id)
    {
        $decision = $request->decision;

       $update = pbperslist::where('id', $id)
            ->update(['decision' => $decision]);
            $msg = 'Decision updated successfully';

        return response()->json(['success' => $msg]);

    }

    public function CreatePerson(Request $request){
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;

        $ranks = Rank::get();
        $trades = Trade::get();
        return view('pb.add-new-person', compact('user', 'ranks', 'trades'));
    }
    public function Store(Request $request){
        // dd($request);
        $s_no = $request->input('s_no');
        $bdno = $request->input('bdno');
        $rank = $request->input('rank');
        $name = $request->input('name');
        $trade = $request->input('trade');
        $basic_trade = $request->input('basic_trade');
        $entry_no = $request->input('entry_no');
        $avg_par = $request->input('avg_par');
        $career_marks = $request->input('career_marks');
        $total_score = $request->input('total_score');
        $es = $request->input('es');
        $cs = $request->input('cs');
        $conduct_sheet = $request->input('conduct_sheet');
        $weight = $request->input('weight');
        $base_unit = $request->input('base_unit');
        $sheet_no = $request->input('sheet_no');
        $rmks_by_ro = $request->input('rmks_by_ro');
        $rmks_by_board = $request->input('rmks_by_board');


        $person = pbperslist::where('bdno', $bdno)->first();
        if($person ==! null){
            return redirect()->back()->with('error', 'Person has already.');
        }
        pbperslist::create([
            's_no' => !empty($s_no) ? $s_no : null,
            'bdno' => !empty($bdno) ? $bdno : null,
            'rank' => !empty($rank) ? $rank : null,
            'name' => !empty($name) ? $name : null,
            'trade' => !empty($trade) ? $trade : null,
            'basic_trade' => !empty($basic_trade) ? $basic_trade : null,
            'entry_no' => !empty($entry_no) ? $entry_no : null,
            'avg_par' => !empty($avg_par) ? $avg_par : null,
            'career_marks' => !empty($career_marks) ? $career_marks : null,
            'ttl_score' => !empty($total_score) ? $total_score : null,
            'es' => !empty($es) ? $es : null,
            'cs' => !empty($cs) ? $cs : null,
            'conduct_sheet' => !empty($conduct_sheet) ? $conduct_sheet : null,
            'weight' => !empty($weight) ? $weight : null,
            'base_unit' => !empty($base_unit) ? $base_unit : null,
            'sheetNo' => !empty($sheet_no) ? $sheet_no : 0,
            'other_rmks' => !empty($rmks_by_ro) ? $rmks_by_ro : null,
            'rmks' => !empty($rmks_by_board) ? $rmks_by_board : null,
        ]);

        return redirect()->back()->with('message', 'Person Created Successfully.');
    }

    public function UploadExcelPage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('pb.person-add-by-upload-excel', compact('user'));
    }

    public function UploadExcel(Request $request)
    {
        $request->validate([
            'file_upload' => 'required|file|mimes:xlsx,xls,csv|max:2048',
        ]);

        try {
            Excel::import(new PbPersonImport, $request->file('file_upload'));
            return redirect()->back()->with('message', 'Excel imported successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }

    public function ImagePage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('pb.image-uload', compact('userName', 'user'));
    }
    public function ImageUpload(Request $request){
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('promotionBoard/image'), $fileName);
            }
            return response()->json(['message' => 'Image uploaded successfully!']);
        }

        return response()->json(['message' => 'No Image uploaded'], 400);
    }

    public function DeleteImage() {
        $uploadPath = public_path('promotionBoard/image');
        File::cleanDirectory($uploadPath);
        return response()->json(['message' => 'All files deleted successfully!']);
    }
    public function ProfilePage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('pb.profile-uload', compact('userName', 'user'));
    }
    public function ProfileUpload(Request $request){
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('promotionBoard/bioData'), $fileName);
            }
            return response()->json(['message' => 'Profile uploaded successfully!']);
        }

        return response()->json(['message' => 'No Profile uploaded'], 400);
    }

    public function DeleteProfile(){
        $uploadPath = public_path('promotionBoard/bioData');
        File::cleanDirectory($uploadPath);
        return response()->json(['message' => 'All files deleted successfully!']);
    }

    public function ConductSheetPage(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('pb.conduct-sheet-upload', compact('userName', 'user'));
    }
    public function ConductSheetUpload(Request $request){
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('promotionBoard/conduct_sheet'), $fileName);
            }
            return response()->json(['message' => 'Profile uploaded successfully!']);
        }

        return response()->json(['message' => 'No Profile uploaded'], 400);
    }
    public function DeleteConductSheet(){
        $uploadPath = public_path('promotionBoard/conduct-sheet');
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
                $file->move(public_path('promotionBoard/indv_application'), $fileName);
            }
            return response()->json(['message' => 'Application uploaded successfully!']);
        }

        return response()->json(['message' => 'No Application uploaded'], 400);
    }
    public function DeleteApplication(){
        $uploadPath = public_path('promotionBoard/indv_application');
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



}
