<?php

namespace App\Http\Controllers\Pb;

use Illuminate\Http\Request;
use App\Exports\SelectedExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class SelectionController extends Controller
{
    public function SelectedList(){
        return Excel::download(new SelectedExport,"Selection_List.xlsx");
    }
}
