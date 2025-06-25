<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\trade;
use App\Models\rank;

class PbVacencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    dd('policies');
        $pbCurrentVacs = DB::table('pb_current_estb_str_vac')
                ->get();


                $trades = trade::get();
                $ranks = rank::get();
                // dd($trades);
        $count=1;
        return view('admin.pbCurrentVac', compact('pbCurrentVacs', 'count', 'trades', 'ranks'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {

        $trade = $request->trade;
        $rank = $request->rank;
        $estb = $request->estb;
        $str = $request->str;
        $exist = $request->exist;
        $retd = $request->retd;
        $promoted_pre_pb = $request->promoted_pre_pb;
        $ttl = $request->ttl;
        $sheetNo = $request->sheetNo;
        // dd($str);

        $policyData = DB::insert('insert into pb_current_estb_str_vac (trade, rank, estb, str, exist, retd, promoted_pre_pb, ttl, sheetNo)
                    values(?,?,?,?,?,?,?,?,?)', [$trade, $rank, $estb, $str, $exist, $retd,$promoted_pre_pb,$ttl, $sheetNo]);

        return redirect()->back()->with("success","Data inserted successfully.");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $trade = $request->trade;
        $rank = $request->rank;
        $estb = $request->estb;
        $str = $request->str;
        $exist = $request->exist;
        $retd = $request->retd;
        $ttl = $request->ttl;
        $sheetNo = $request->sheetNo;


        $policyData = DB::table('pb_current_estb_str_vac')->where('id', $id)->update(['trade'=>$trade, 'rank'=>$rank, 'estb'=>$estb, 'str'=>$str, 'exist'=>$exist, 'retd'=>$retd, 'ttl'=>$ttl, 'sheetNo'=>$sheetNo] );
        return redirect()->back()->with("success","Data update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $deleteData = DB::table('pb_current_estb_str_vac')->where('id', $id)->delete();
       return redirect()->back()->with('delete', 'Delete data successfully.');
    }
}
