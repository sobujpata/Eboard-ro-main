<?php

namespace App\Http\Controllers;

use App\Imports\ConductSheetImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ConductSheetController extends Controller
{
    public function index(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        return view('pb.conduct-sheet-by-upload-excel', compact('user'));
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
}
