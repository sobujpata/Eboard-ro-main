<?php

namespace App\Http\Controllers\Pb;

use App\Exports\StanByExcel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class StanByController extends Controller
{
    public function StanBy(){
        return Excel::download(new StanByExcel, "stanby.xlsx");
    }
}
