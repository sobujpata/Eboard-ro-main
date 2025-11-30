<?php

namespace App\Http\Controllers\Pb;


use Exception;
use App\Models\Base;
use App\Models\Rank;
use App\Models\User;
use App\Models\Trade;
use App\Models\pbperslist;
use App\Exports\UsersExport;
use App\Models\ConductSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PbContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pbListShow(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        if ($user->lastName !== "pb") {
            return redirect()->back()->with("error", "You are unauthorize.");
        }
        $trade = $request->trade;
        $bases = Base::get();
        $sheetNo = $request->sheetNo;
        if (in_array($sheetNo, [3, 4, 5, 6])) {
            $sgtSheet = 3;
        } elseif ($sheetNo == 1) {
            $sgtSheet = 1;
        } else {
            $sgtSheet = 2;
        }
        $data = pbperslist::where('trade', $trade)
            ->where('sheetNo', $sheetNo)
            ->orderBy('bdno', 'asc')->get();
        $trades = Trade::all();
        $ranks = Rank::all();
        $rank = pbperslist::select('rank')
            ->where('trade', $trade)
            ->where('sheetNo', $sheetNo)
            ->distinct()->first();

        $currentPb = DB::table('pb_current_estb_str_vac')
            ->where('trade', $trade)
            ->where('sheetno', $sgtSheet)
            ->limit(1)
            ->first();
        // dd($sgtSheet);
        $previousPb = DB::table('previouse_pb')
            ->where('trade', $trade)
            ->where('sheetNo', $sgtSheet)
            ->get();
        // dd($previousPb);
        $vacNextYear = DB::table('vac_create_next_yrs')
            ->where('trade', $trade)
            ->where('sheetNo', $sgtSheet)
            ->first();
        $totalEntry = pbperslist::SELECT('entry_no', DB::raw('count(*) as pers_count'))
            ->where('trade', $trade)
            ->where('sheetno', $sheetNo)
            ->groupBy('entry_no')
            ->get();
        $countRecom = pbperslist::SELECT(DB::raw('count(decision) as pers_recom'))
            ->where('trade', $trade)
            ->where('sheetno', $sheetNo)
            ->where('decision', 'true')
            ->groupBy('entry_no')
            ->get();
        $scoreMAxMin = pbperslist::where('trade', $trade)
            ->where('sheetno', $sheetNo)
            ->selectRaw('MIN(ttl_score) as min_score, MAX(ttl_score) as max_score')
            ->limit(1)
            ->first();
        $aboveScore = pbperslist::where('trade', $trade)
            ->where('sheetno', $sheetNo)
            ->where('ttl_score', '>=', 150)
            ->count();
        $bellowScore = pbperslist::where('trade', $trade)
            ->where('sheetno', $sheetNo)
            ->where('ttl_score', '<', 150)
            ->count();
        $recomScore = pbperslist::where('trade', $trade)
            ->where('sheetno', $sheetNo)
            ->where('decision', 'true')
            ->selectRaw('MIN(ttl_score) as min_recom, MAX(ttl_score) as max_recom')
            ->limit(1)
            ->first();
        $recompers = pbperslist::where('trade', $trade)
            ->where('sheetno', $sheetNo)
            ->where('decision', 'true')
            ->count();
        $lastEntrySwo = pbperslist::where('trade', $trade)
            ->where('rank', 'SWO')
            ->where('entry_no', '23')
            ->where('decision', 'true')
            ->count();
        $lastEntryWo = pbperslist::where('trade', $trade)
            ->where('rank', 'WO')
            ->where('entry_no', '26')
            ->where('decision', 'true')
            ->count();
        // dd($lastEntryWo);
        $recomMwo = pbperslist::where('trade', $trade)
            ->where('rank', 'SWO')
            ->where('decision', 'true')
            ->count();
        $recomSwo = pbperslist::where('trade', $trade)
            ->where('rank', 'WO')
            ->where('decision', 'true')
            ->count();
        $entryCounts = $data->groupBy('entry_no')->map->count();
        $totalPersons = $data->count();
        return view('pb.pb', compact(
            'data',
            'entryCounts',
            'totalPersons',
            'previousPb',
            'totalEntry',
            'sheetNo',
            'sgtSheet',
            'vacNextYear',
            'countRecom',
            'scoreMAxMin',
            'aboveScore',
            'bellowScore',
            'recomScore',
            'currentPb',
            'recompers',
            'trade',
            'sheetNo',
            'rank',
            'lastEntrySwo',
            'lastEntryWo',
            'recomMwo',
            'recomSwo',
            'user',
            'trades',
            'ranks',
            'bases'
        ))->with('success', 'Data found');
    }
    public function pbPersById(Request $request)
    {
        $id = $request->id;
        $person = pbperslist::find($id);

        return response()->json($person);
    }

    public function edit(Request $request)
    {
        $id = $request->updateId;
        $trade = $request->trade;
        $sheetNo = $request->sheetNo;
        $s_no = $request->s_no;
        $bdno = $request->bdno;
        $rank = $request->rank;
        $basic_trade = $request->basic_trade;
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
        $base = $request->base;
        $other_rmks = $request->other_rmks;
        $image = $request->file('image');

        if ($image != null) {
            // Get extension only
            $extension = $image->getClientOriginalExtension();

            // Rename file with bdno instead of original name
            $fileName = $bdno . '.' . $extension;

            // Move to public/promotionBoard/image
            $image->move(public_path('promotionBoard/image'), $fileName);

            // Save path or filename to DB if needed
            $file = 'promotionBoard/image/' . $fileName;
        }

        $person = pbperslist::find($id);

        // Perform database update
        $person->update([
            's_no' => $s_no,
            'bdno' => $bdno,
            'rank' => $rank,
            'name' => $name,
            'trade' => $trade,
            'basic_trade' => $basic_trade,
            'entry_no' => $entry_no,
            'avg_par' => $avg_par,
            'career_marks' => $career_marks,
            'ttl_score' => $ttl_score,
            'es' => $es,
            'cs' => $cs,
            'conduct_sheet' => $conduct_sheet,
            'weight' => $weight,
            'base_unit' => $base_unit,
            'base' => $base,
            'other_rmks' => $other_rmks,
            'sheetNo' => $sheetNo
        ]);
        return redirect()->back()->with("success", "Data update successfully.");
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

        return redirect()->back()->with("success", "Data update successfully.");
    }

    public function SummaryDynamic(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $sub = DB::table('pbPersLists')
            ->select(
                'trade',
                DB::raw("SUM(CASE WHEN rank = 'SWO' THEN 1 ELSE 0 END) AS SWO"),
                DB::raw("SUM(CASE WHEN rank = 'WO' THEN 1 ELSE 0 END) AS WO"),
                DB::raw("SUM(CASE WHEN rank = 'SGT' THEN 1 ELSE 0 END) AS Sgt"),
                DB::raw("SUM(CASE WHEN rank IN ('SWO','WO','SGT') THEN 1 ELSE 0 END) AS Total")
            )
            ->where('decision', 'true')
            ->groupBy('trade');

        $data = DB::table('pbPersLists')
            ->select(
                'pbPersLists.trade',
                DB::raw("COALESCE(sub.SWO, 0) AS SWO"),
                DB::raw("COALESCE(sub.WO, 0) AS WO"),
                DB::raw("COALESCE(sub.Sgt, 0) AS Sgt"),
                DB::raw("COALESCE(sub.Total, 0) AS Total")
            )
            ->leftJoinSub($sub, 'sub', function ($join) {
                $join->on('pbPersLists.trade', '=', 'sub.trade');
            })
            ->groupBy('pbPersLists.trade', 'sub.SWO', 'sub.WO', 'sub.Sgt', 'sub.Total')
            ->orderBy('pbPersLists.trade')
            ->get();

            return view('pb.summary.summary', compact('data', 'user'));
    }

    public function SummaryDynamicPost(Request $request)
    {
        $trade = $request->trade;
        $rank = $request->rank;

        // $data = pbperslist::where('trade', $trade)
        //     ->where('rank', $rank)
        //     ->where('decision', 'true')
        //     ->get();
        $subQuery = pbPersList::from('pbperslists as us1')
            ->selectRaw("
        us1.*,
        RANK() OVER (
            PARTITION BY us1.entry_no
            ORDER BY (us1.avg_par + us1.career_marks) DESC, us1.bdno ASC
        ) AS rank2,
        (
            SELECT COUNT(*)
            FROM pbperslists us2
            WHERE
                us2.trade = ?
                AND us2.rank = ?
                AND (
                    (us2.avg_par + us2.career_marks) > (us1.avg_par + us1.career_marks)
                    OR (
                        (us2.avg_par + us2.career_marks) = (us1.avg_par + us1.career_marks)
                        AND us2.bdno < us1.bdno
                    )
                )
        ) + 1 AS rank1
    ", [$trade, $rank])
            ->where('us1.trade', $trade)
            ->where('us1.rank', $rank);

        // 1) Get all ranked records
        $allRanked = DB::query()
            ->fromSub($subQuery, 'ranked_full')
            ->get();

        // 2) Count per entry_no
        $entryCounts = $allRanked->groupBy('entry_no')->map->count();

        // 3) Filter final results (decision = 'true')
        $persons = $allRanked->where('decision', 'true')->values();

        // 4) Total persons
        $totalPersons = $allRanked->count();



        $totalEntry = pbperslist::SELECT('entry_no', DB::raw('count(*) as pers_count'))
            ->where('trade', $trade)
            ->where('sheetno', $rank)
            ->groupBy('entry_no')
            ->get();

        return response()->json($persons);
    }

    public function AllSummaryDynamic(Request $request)
    {
        $trade = $request->trade;

        $data = pbperslist::where('trade', $trade)
            ->where('decision', 'true')
            ->get();

        return response()->json($data);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
