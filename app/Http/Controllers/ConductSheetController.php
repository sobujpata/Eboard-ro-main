<?php

namespace App\Http\Controllers;

use App\Imports\ConductSheetImport;
use App\Models\ConductSheet;
use App\Models\pbperslist;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ConductSheetController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('pb.conduct-sheet-by-upload-excel', compact('user'));
    }

    public function personByConductsheet(Request $request)  {
        $id = $request->id;
        $pbperson = pbperslist::find($id);
        $bdno = $pbperson->bdno;

        $conductSheet = ConductSheet::where('bdno', $bdno)->get();

        return response()->json($conductSheet);
    }

    public function UploadExcel(Request $request)
    {
        $request->validate([
            'file_upload' => 'required|file|mimes:xlsx,xls,csv|max:2048',
        ]);

        try {
            Excel::import(new ConductSheetImport, $request->file('file_upload'));
            return redirect()->back()->with('message', 'Excel imported successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Import failed: ' . $e->getMessage());
        }
    }

    public function conductSheet(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $conductSheets = ConductSheet::orderBy('bdno', 'asc')->get();
        return view('pb.conduct-sheeet.index', compact('user', 'conductSheets'));
    }

    public function create(Request $request)
    {
        ConductSheet::create([
            'bdno' => $request->bdno,
            'present_rank' => $request->present_rank,
            'name' => $request->name,
            'trade' => $request->trade,
            'base_or_unit' => $request->base_or_unit,
            'date_of_offense' => $request->date_of_offense,
            'rank' => $request->rank,
            'offense' => $request->summernote,
            'date_of_punishment' => $request->date_of_punishment,
            'awarded' => $request->awarded,
            'entry' => $request->entry,
            'moral_trupitude' => $request->moral_trapitude,
        ]);

        return redirect()->route('conductSheet.all')->with('success', 'Created Successfully.');
    }

    public function showById(Request $request)
    {
        $id = $request->id;
        $conduct_sheet = ConductSheet::find($id);
        return response()->json($conduct_sheet);
    }

    public function update(Request $request)
    {
        //   dd($request->summernoteUpdate);
        $id = $request->input('updateId');
        $conductSheet = ConductSheet::find($id);

        $conductSheet->update([
            'bdno' => $request->bdnoUpdate,
            'present_rank' => $request->present_rankUpdate,
            'name' => $request->nameUpdate,
            'trade' => $request->tradeUpdate,
            'base_or_unit' => $request->base_or_unitUpdate,
            'date_of_offense' => $request->date_of_offenseUpdate,
            'rank' => $request->rankUpdate,
            'offense' => $request->summernoteUpdate,
            'date_of_punishment' => $request->date_of_punishmentUpdate,
            'awarded' => $request->awardedUpdate,
            'entry' => $request->entryUpdate,
            'moral_trupitude' => $request->moral_trapitudeUpdate,
        ]);

        return redirect()->route('conductSheet.all')->with('success', 'Updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        // dd($id);
        $data = ConductSheet::find($id);
        $data->delete();
        return back()->with('success', 'Deleted successfully.');
    }
}
