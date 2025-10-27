<?php

namespace App\Http\Controllers;

use App\Models\RetdVac;
use App\Models\Trade;
use Illuminate\Http\Request;

class RetdvacController extends Controller
{
    public function index(){
        return view('pages.dashboard.vac-on-tetd');
    }

    public function show(){
        $data = RetdVac::all();
        return response()->json(['data' => $data]);
    }

    public function create(Request $request){
        $ret_dvac = new RetdVac();
        $ret_dvac->sheet_no = $request->sheet_no;
        $ret_dvac->entry_no = $request->entry_no;
        $ret_dvac->vac_on_retd = $request->vac_on_retd;
        $ret_dvac->remarks = $request->remarks;
        $ret_dvac->trade = $request->trade;
        $ret_dvac->save();

        return response()->json(['message'=>'Created Successfully'],201);
    }

    public function showById(Request $request){
        $data = RetdVac::find($request->id);
        return response()->json(['data' => $data]);
    }

    public function update(Request $request, $id){
        $ret_dvac = RetdVac::find($id);
        $ret_dvac->sheet_no = $request->sheet_no;
        $ret_dvac->entry_no = $request->entry_no;
        $ret_dvac->vac_on_retd = $request->vac_on_retd;
        $ret_dvac->remarks = $request->remarks;
        $ret_dvac->trade = $request->trade;
        $ret_dvac->save();

        return response()->json(['message'=>'Updated Successfully'],200);
    }
    public function destroy(Request $request){
        $ret_dvac = RetdVac::find($request->id);
        $ret_dvac->delete();
        return response()->json(1);
    }

    public function trade(){
        $trade = Trade::get();
         return response()->json($trade);
    }
}
