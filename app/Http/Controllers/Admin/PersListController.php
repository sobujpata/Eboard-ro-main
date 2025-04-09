<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\trade;
use App\Models\rank;

class PersListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    dd('policies');
        $data = DB::table('pbperslists')
                ->paginate(10);


                $trades = trade::get();
                $ranks = rank::get();
                // dd($data);
                $i = ($data->perPage() * ($data->currentPage() - 1)) + 1;
        return view('admin.pbPersList', compact('data','i', 'trades', 'ranks'));
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
        $s_no = $request->s_no;
        $bdno = $request->bdno;
        $rank = $request->rank;
        $name = $request->name;
        $trade = $request->trade;
        $entry_no = $request->entry_no;
        $avg_par = $request->avg_par;
        $career_marks = $request->career_marks;
        $ttl_score = $request->ttl_score;
        $es = $request->es;
        $cs = $request->cs;
        $conduct_sheet = $request->conduct_sheet;
        $weight = $request->weight;
        $base_unit = $request->base_unit;
        $other_rmks = $request->other_rmks;
        $sheetNo = $request->sheetNo;

        $trades = trade::get();
        $ranks = rank::get();

       DB::table('pbperslists')->where('id', $id)->update(['s_no'=>$s_no,'bdno'=>$bdno,'rank'=>$rank,'name'=>$name,'trade'=>$trade,'entry_no'=>$entry_no,
                'avg_par'=>$avg_par, 'career_marks'=>$career_marks, 'ttl_score'=>$ttl_score, 'es'=>$es, 'cs'=>$cs, 'conduct_sheet'=>$conduct_sheet, 'weight'=>$weight,'base_unit'=>$base_unit,
                 'other_rmks'=>$other_rmks, 'sheetNo'=>$sheetNo]);
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
