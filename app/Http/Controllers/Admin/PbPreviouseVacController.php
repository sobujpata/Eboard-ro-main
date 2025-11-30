<?php

namespace App\Http\Controllers\Admin;

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
    public function index(Request $request)
    {
        $query = $request->input('search');
        $previouse_pb = DB::table('previouse_pb');
        if ($query) {
            $previouse_pb->orWhere('trade', 'like', "%{$query}%");
        }
        $results = $previouse_pb->paginate(10);
        $trades = trade::get();
        $ranks = rank::get();
         return view('admin.pbPreviouseVac', compact('results',  'trades', 'ranks'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        DB::table('previouse_pb')->insert([
            'trade' => $request->trade,
            'rank' => $request->rank,
            'estb' => $request->estb,
            'str' => $request->str,
            'exist' => $request->exist,
            'retd' => $request->retd,
            'promoted_pre_pb' => $request->promoted_pre_pb,
            'ttl' => $request->ttl,
            'promotion' => $request->promotion,
            'score_max' => $request->score_max,
            'score_min' => $request->score_min,
            'sheetNo' => $request->sheetNo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Data inserted successfully.');
    }


    public function edit(Request $request, $id)
    {
        // dd($request);
        $trade = $request->trade;
        $rank = $request->rank;
        $estb = $request->estb;
        $str = $request->str;
        $exist = $request->exist;
        $retd = $request->retd;
        $ttl = $request->ttl;
        $promoted_pre_pb = $request->promoted_pre_pb;
        $promotion = $request->promotion;
        $sheetNo = $request->sheetNo;
        $score_max = $request->score_max;
        $score_min = $request->score_min;

        DB::table('previouse_pb')->where('id', $id)->update([
            'trade' => $trade,
            'rank' => $rank,
            'estb' => $estb,
            'str' => $str,
            'exist' => $exist,
            'retd' => $retd,
            'ttl' => $ttl,
            'promoted_pre_pb' => $promoted_pre_pb,
            'promotion' => $promotion,
            'score_max' => $score_max,
            'score_min' => $score_min,
            'sheetNo' => $sheetNo
        ]);
        return redirect()->back()->with("success", "Data update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = DB::table('previouse_pb')->where('id', $id)->delete();
        return redirect()->back()->with('warning', 'Delete data successfully.');
    }
}
