<?php

namespace App\Http\Controllers\pb;


use Exception;
use App\Models\User;
use App\Models\Trade;
use App\Models\pbperslist;
use App\Exports\UsersExport;
use App\Models\ConductSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Rank;

class pbContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pbListShow(Request $request)
    {
        $user_id = $request->header('id');
        // $userName = User::where('id', $user_id)->select('userName')->first();
        $user = User::find($user_id);
        if($user->lastName !== "pb"){
            return redirect()->back()->with("error","You are unauthorize.");
        }
        // dd($userName);

        $trade = $request->trade;
        $sheetNo = $request->sheetNo;
        // dd($sheetNo);
        $data = pbperslist::where('trade', $trade)
                ->where('sheetNo', $sheetNo)
                ->get();

        $dataCount=pbperslist::where('trade', $trade)
                ->where('sheetNo', $sheetNo)
                ->count();
        $trades = Trade::all();
        $ranks = Rank::all();
        // dd($ranks);
        if($dataCount > 0){

        $rank=pbperslist::select('rank')
                ->where('trade', $trade)
                ->where('sheetNo', $sheetNo)
                ->distinct()->get();
        // dd($rank);
        $previousPb = DB::table('previouse_pb')
                    ->where('trade', $trade)
                    ->where('sheetNo', $sheetNo)
                    ->get();
                    //  dd($previousPb);
        $i=1;

        $totalEntry =pbperslist:: SELECT('entry_no', DB::raw('count(*) as pers_count'))
                    -> where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->groupBy('entry_no')
                    ->get();
                // dd($totalEntry);

        $vacNextYear = DB::table('vac_create_next_yrs')
                    -> where('trade', $trade)
                    ->where('sheetNo', $sheetNo)
                    ->first();
                    // dd($vacNextYear);
        $countRecom =pbperslist:: SELECT(DB::raw('count(decision) as pers_recom'))
                    -> where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('decision', 'true')
                    ->groupBy('entry_no')
                    ->get();
        $scoreMAxMin =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->selectRaw('MIN(ttl_score) as min_score, MAX(ttl_score) as max_score')
                    ->limit(1)
                    ->first();
        $aboveScore =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('ttl_score','>=',150)
                    ->count();
        $bellowScore =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('ttl_score','<',150)
                    ->count();
        $recomScore =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('decision', 'true')
                    ->selectRaw('MIN(ttl_score) as min_recom, MAX(ttl_score) as max_recom')
                    ->limit(1)
                    ->first();
        $currentPb =DB::table('pb_current_estb_str_vac')
                    -> where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->limit(1)
                    ->first();

                    // dd($currentPb->retd);
        $recompers = pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('decision', 'true')
                    ->count();
        $lastEntrySwo = pbperslist:: where('trade', $trade)
                    ->where('rank', 'SWO')
                    ->where('entry_no','21')
                    ->where('decision','true')
                    ->count();
        $lastEntryWo = pbperslist:: where('trade', $trade)
                    ->where('rank', 'SWO')
                    ->where('entry_no','22')
                    ->where('decision','true')
                    ->count();
        $recomMwo = pbperslist:: where('trade', $trade)
                    ->where('rank','SWO')
                    ->where('decision', 'true')
                    ->count();
        $recomSwo = pbperslist:: where('trade', $trade)
                    ->where('rank','WO')
                    ->where('decision', 'true')
                    ->count();
                    // $conductSheets = ConductSheet::where('bdno', $data->bdno)->get();
                    // $conductSheets = $conductSheets->isEmpty() ? null : $conductSheets;
            // dd($recomSwo);
            return view('pb.pb', compact('dataCount','data', 'i', 'previousPb', 'totalEntry', 'sheetNo', 'vacNextYear', 'countRecom', 'scoreMAxMin', 'aboveScore', 'bellowScore',
                                    'recomScore', 'currentPb', 'recompers', 'trade','sheetNo', 'rank', 'lastEntrySwo', 'lastEntryWo', 'recomMwo', 'recomSwo', 'user', 'trades', 'ranks'));
        }else{
            $rank=pbperslist::select('rank')
                ->where('trade', $trade)
                ->where('sheetNo', $sheetNo)
                ->distinct()->get();
        // dd($rank);
        $previousPb = DB::table('previouse_pb')
                    ->where('trade', $trade)
                    ->where('sheetNo', $sheetNo)
                    ->get();
        $i=1;

        $totalEntry =pbperslist:: SELECT('entry_no', DB::raw('count(*) as pers_count'))
                    -> where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->groupBy('entry_no')
                    ->get();
                // dd($totalEntry);

        $vacNextYear = DB::table('vac_create_next_yrs')
                    -> where('trade', $trade)
                    ->where('sheetNo', $sheetNo)
                    ->first();
                    // dd($vacNextYear);
        $countRecom =pbperslist:: SELECT(DB::raw('count(decision) as pers_recom'))
                    -> where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('decision', 'true')
                    ->groupBy('entry_no')
                    ->get();
        $scoreMAxMin =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->selectRaw('MIN(ttl_score) as min_score, MAX(ttl_score) as max_score')
                    ->limit(1)
                    ->first();
        $aboveScore =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('ttl_score','>=',150)
                    ->count();
        $bellowScore =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('ttl_score','<',150)
                    ->count();
        $recomScore =pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('decision', 'true')
                    ->selectRaw('MIN(ttl_score) as min_recom, MAX(ttl_score) as max_recom')
                    ->limit(1)
                    ->first();
        $currentPb =DB::table('pb_current_estb_str_vac')
                    -> where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->limit(1)
                    ->first();

                    // dd($currentPb->retd);
        $recompers = pbperslist:: where('trade', $trade)
                    ->where('sheetno', $sheetNo)
                    ->where('decision', 'true')
                    ->count();
        $lastEntrySwo = pbperslist:: where('trade', $trade)
                    ->where('rank', 'SWO')
                    ->where('entry_no','21')
                    ->where('decision','true')
                    ->count();
        $lastEntryWo = pbperslist:: where('trade', $trade)
                    ->where('rank', 'SWO')
                    ->where('entry_no','22')
                    ->where('decision','true')
                    ->count();
        $recomMwo = pbperslist:: where('trade', $trade)
                    ->where('rank','SWO')
                    ->where('decision', 'true')
                    ->count();
        $recomSwo = pbperslist:: where('trade', $trade)
                    ->where('rank','WO')
                    ->where('decision', 'true')
                    ->count();
            return view('pb.pb-blank', compact('previousPb', 'totalEntry', 'sheetNo', 'vacNextYear', 'countRecom', 'scoreMAxMin', 'aboveScore', 'bellowScore',
                                    'recomScore', 'currentPb', 'recompers', 'trade','sheetNo', 'rank', 'lastEntrySwo', 'lastEntryWo', 'recomMwo', 'recomSwo', 'user', 'trades', 'ranks'))->with('error', 'Data no fund');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $id = $request->id;
        $trade = $request->trade;
        $sheetNo = $request->sheetNo;
        // dd($sheetNo);
        $s_no = $request->s_no;
        $bdno = $request->bdno;
        $rank = $request->rank;
        $name = $request->name;
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


        // Perform database update
        pbperslist::where('id', $id)->update(['s_no'=>$s_no,'bdno'=>$bdno,'rank'=>$rank,'name'=>$name,'trade'=>$trade,'entry_no'=>$entry_no,
                'avg_par'=>$avg_par, 'career_marks'=>$career_marks, 'ttl_score'=>$ttl_score, 'es'=>$es, 'cs'=>$cs, 'conduct_sheet'=>$conduct_sheet, 'weight'=>$weight,'base_unit'=>$base_unit,
                 'other_rmks'=>$other_rmks, 'sheetNo'=>$sheetNo]);

            return redirect()->back()->with("success","Data update successfully.");
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatermks(Request $request, $id)
    {
        $id = $request->id;
        $trade = $request->trade;
        $sheetNo = $request->sheetNo;
        // dd($sheetNo);

        $rmk = '';
        if ($request->has('rmks') && is_array($request->rmks)) {
            $rmk = implode(",", $request->rmks);
        }

        // Handle 'decision' parameter (assuming it's nullable)
        $decision = $request->input('decision', null);

        // Handle 'rmks_1' parameter (assuming it's nullable)
        $rmks_1 = $request->input('rmks_1', null);

        // Perform database update
        pbperslist::where('id', $id)
            ->update(['rmks' => $rmk, 'decision' => $decision, 'rmks_1' => $rmks_1]);

            return redirect()->back()->with("success","Data update successfully.");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
