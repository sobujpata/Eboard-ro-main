<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\trade;
use App\Models\rank;

class PbNextVacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    dd('policies');
        $PbNextVacs = DB::table('vac_create_next_yrs')
                ->get();
        
        
                $trades = trade::get();
                $ranks = rank::get();
                // dd($trades);
        $count=1;
        return view('admin.PbNextVac', compact('PbNextVacs', 'count', 'trades', 'ranks'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {

        $trade = $request->trade;
        $rank = $request->rank;
        $next_yr = $request->next_yr;
        $next_2yrs = $request->next_2yrs;
        $score_min = $request->score_min;
        $sheetNo = $request->sheetNo;
        
        // dd($sheetNo);
        
        DB::insert('insert into vac_create_next_yrs (trade, rank, next_yr, next_2yrs, score_min, sheetNo) 
                    values(?,?,?,?,?,?)', [$trade, $rank, $next_yr, $next_2yrs, $score_min, $sheetNo]);

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
        $next_yr = $request->next_yr;
        $next_2yrs = $request->next_2yrs;
        $score_min = $request->score_min;
        $sheetNo = $request->sheetNo;
        

       
       DB::table('vac_create_next_yrs')->where('id', $id)->update(['trade'=>$trade, 'rank'=>$rank, 'next_yr'=>$next_yr, 'next_2yrs'=>$next_2yrs, 'score_min'=>$score_min, 'sheetNo'=>$sheetNo] );
        return redirect()->back()->with("success","Data update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $deleteData = DB::table('vac_create_next_yrs')->where('id', $id)->delete();
       return redirect()->back()->with('delete', 'Delete data successfully.');
    }
}
