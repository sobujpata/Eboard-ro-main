<?php

namespace App\Http\Controllers\Pb;

use App\Models\User;
use App\Models\Trade;
use Illuminate\Http\Request;
use App\Exports\PbrecomExport;
use App\Exports\ImageUrlExport;
use App\Exports\SelectedExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function pbRcomExportList(Request $request)
    {
        $trade = $request->trade;

        return Excel::download(new PbrecomExport($trade), "{$trade}-pbrecom.xlsx");
        // dd($trade);
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
