<?php

namespace App\Http\Controllers\pb;

use Illuminate\Http\Request;
use App\Exports\PbrecomExport;
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
    
}
