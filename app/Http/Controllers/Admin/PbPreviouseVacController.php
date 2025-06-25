<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\trade;
use App\Models\rank;

class PbPreviouseVacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    dd('policies');
        $pbPreviouseVacs = DB::table('previouse_pb')
                ->get();


                $trades = trade::get();
                $ranks = rank::get();
                // dd($trades);
        $count=1;
        return view('admin.pbPreviouseVac', compact('pbPreviouseVacs', 'count', 'trades', 'ranks'));
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

        DB::insert('insert into previouse_pb (trade, rank, estb, str, exist, retd, promoted_pre_pb, ttl, sheetNo)
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
        // dd($request);
        $trade = $request->trade;
        $rank = $request->rank;
        $estb = $request->estb;
        $str = $request->str;
        $exist = $request->exist;
        $retd = $request->retd;
        $promotion = $request->promotion;
        $ttl = $request->ttl;
        $sheetNo = $request->sheetNo;
        $score_max = $request->score_max;
        $score_min = $request->score_min;


       DB::table('previouse_pb')->where('id', $id)->update([
        'trade'=>$trade,
        'rank'=>$rank,
        'estb'=>$estb,
        'str'=>$str,
        'exist'=>$exist,
        'retd'=>$retd,
        'promotion'=>$promotion,
        'ttl'=>$ttl,
        'score_max'=>$score_max,
        'score_min'=>$score_min,
        'sheetNo'=>$sheetNo
        ] );
        return redirect()->back()->with("status","Data update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $deleteData = DB::table('previouse_pb')->where('id', $id)->delete();
       return redirect()->back()->with('delete', 'Delete data successfully.');
    }
}
