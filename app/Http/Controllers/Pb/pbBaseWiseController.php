<?php

namespace App\Http\Controllers\pb;

use App\Models\User;
use App\Models\pbperslist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class pbBaseWiseController extends Controller
{
    public function index(Request $request){
        $user_id = $request->header("id");
        $user = User::find($user_id);
        $userName = $user->userName;
        // dd($userName);
        return View("pb.pb-home-page-base");
    }
    public function PbPers(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;

        // dd($userName);

        $trade = $request->trade;
        $sheetNo = $request->sheetNo;
        $data = pbperslist::where('trade', $trade)
                ->where('sheetNo', $sheetNo)
                ->where('base', $userName)
                ->get();
        // dd($data);

        $dataCount=pbperslist::where('trade', $trade)
                ->where('sheetNo', $sheetNo)
                ->where('base', $userName)
                ->count();
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
                    ->get();
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
            // dd($recomSwo);
            return view('pb.pbBaseWise', compact('data', 'i', 'previousPb', 'totalEntry', 'sheetNo', 'vacNextYear', 'countRecom', 'scoreMAxMin', 'aboveScore', 'bellowScore',
                                    'recomScore', 'currentPb', 'recompers', 'trade','sheetNo', 'rank', 'lastEntrySwo', 'lastEntryWo', 'recomMwo', 'recomSwo', 'userName'));
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
                    ->get();
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
            return view('pb.pb-blank-base', compact('previousPb', 'totalEntry', 'sheetNo', 'vacNextYear', 'countRecom', 'scoreMAxMin', 'aboveScore', 'bellowScore',
                                    'recomScore', 'currentPb', 'recompers', 'trade','sheetNo', 'rank', 'lastEntrySwo', 'lastEntryWo', 'recomMwo', 'recomSwo', 'userName'))->with('error', 'Data no fund');
        }

    }
}
