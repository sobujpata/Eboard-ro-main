<?php

namespace App\Http\Controllers\Admin;
use App\Models\Invoice;

use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\View\View;
use App\Models\pbperslist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function data()
    {
        // dd('Recommend List by Board');
        $acFittSwo = pbperslist::where('trade', 'AC Fitt')->where('rank', 'SWO')->where('decision', 'true')->count();
        $acFittWo = pbperslist::where('trade', 'AC Fitt')->where('rank', 'WO')->where('decision', 'true')->count();
        $acFittSgt = pbperslist::where('trade', 'AC Fitt')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $eiFittSwo = pbperslist::where('trade', 'E&I Fitt')->where('rank', 'SWO')->where('decision', 'true')->count();
        $eiFittWo = pbperslist::where('trade', 'E&I Fitt')->where('rank', 'WO')->where('decision', 'true')->count();
        $eiFittSgt = pbperslist::where('trade', 'E&I Fitt')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $armtFittSwo = pbperslist::where('trade', 'Armt Fitt')->where('rank', 'SWO')->where('decision', 'true')->count();
        $armtFittWo = pbperslist::where('trade', 'Armt Fitt')->where('rank', 'WO')->where('decision', 'true')->count();
        $armtFittSgt = pbperslist::where('trade', 'Armt Fitt')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $lsewSwo = pbperslist::where('trade', 'LSEW')->where('rank', 'SWO')->where('decision', 'true')->count();
        $lsewWo = pbperslist::where('trade', 'LSEW')->where('rank', 'WO')->where('decision', 'true')->count();
        $lsewSgt = pbperslist::where('trade', 'LSEW')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $photoSwo = pbperslist::where('trade', 'Photo')->where('rank', 'SWO')->where('decision', 'true')->count();
        $photoWo = pbperslist::where('trade', 'Photo')->where('rank', 'WO')->where('decision', 'true')->count();
        $photoSgt = pbperslist::where('trade', 'Photo')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $radioFittSwo = pbperslist::where('trade', 'Radio Fitt')->where('rank', 'SWO')->where('decision', 'true')->count();
        $radioFittWo = pbperslist::where('trade', 'Radio Fitt')->where('rank', 'WO')->where('decision', 'true')->count();
        $radioFittSgt = pbperslist::where('trade', 'Radio Fitt')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $genEngrSwo = pbperslist::where('trade', 'Gen Engg')->where('rank', 'SWO')->where('decision', 'true')->count();
        $genEngrWo = pbperslist::where('trade', 'Gen Engg')->where('rank', 'WO')->where('decision', 'true')->count();
        $genEngrSgt = pbperslist::where('trade', 'Gen Engg')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $mtofSwo = pbperslist::where('trade', 'MTOF')->where('rank', 'SWO')->where('decision', 'true')->count();
        $mtofWo = pbperslist::where('trade', 'MTOF')->where('rank', 'WO')->where('decision', 'true')->count();
        $mtofSgt = pbperslist::where('trade', 'MTOF')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $mtoSwo = pbperslist::where('trade', 'MTO')->where('rank', 'SWO')->where('decision', 'true')->count();
        $mtoWo = pbperslist::where('trade', 'MTO')->where('rank', 'WO')->where('decision', 'true')->count();
        $mtoSgt = pbperslist::where('trade', 'MTO')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $gsSwo = pbperslist::where('trade', 'GS')->where('rank', 'SWO')->where('decision', 'true')->count();
        $gsWo = pbperslist::where('trade', 'GS')->where('rank', 'WO')->where('decision', 'true')->count();
        $gsSgt = pbperslist::where('trade', 'GS')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $radarOptrSwo = pbperslist::where('trade', 'radar Optr')->where('rank', 'SWO')->where('decision', 'true')->count();
        $radarOptrWo = pbperslist::where('trade', 'radar Optr')->where('rank', 'WO')->where('decision', 'true')->count();
        $radarOptrSgt = pbperslist::where('trade', 'radar Optr')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $atcaSwo = pbperslist::where('trade', 'ATCA')->where('rank', 'SWO')->where('decision', 'true')->count();
        $atcaWo = pbperslist::where('trade', 'ATCA')->where('rank', 'WO')->where('decision', 'true')->count();
        $atcaSgt = pbperslist::where('trade', 'ATCA')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $metAsstSwo = pbperslist::where('trade', 'met Asst')->where('rank', 'SWO')->where('decision', 'true')->count();
        $metAsstWo = pbperslist::where('trade', 'met Asst')->where('rank', 'WO')->where('decision', 'true')->count();
        $metAsstSgt = pbperslist::where('trade', 'met Asst')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $medAsstSwo = pbperslist::where('trade', 'med Asst')->where('rank', 'SWO')->where('decision', 'true')->count();
        $medAsstWo = pbperslist::where('trade', 'med Asst')->where('rank', 'WO')->where('decision', 'true')->count();
        $medAsstSgt = pbperslist::where('trade', 'med Asst')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $logAsstSwo = pbperslist::where('trade', 'log Asst')->where('rank', 'SWO')->where('decision', 'true')->count();
        $logAsstWo = pbperslist::where('trade', 'log Asst')->where('rank', 'WO')->where('decision', 'true')->count();
        $logAsstSgt = pbperslist::where('trade', 'log Asst')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $secAsstgdSwo = pbperslist::where('trade', 'sec Asst (GD)')->where('rank', 'SWO')->where('decision', 'true')->count();
        $secAsstgdWo = pbperslist::where('trade', 'sec Asst (GD)')->where('rank', 'WO')->where('decision', 'true')->count();
        $secAsstgdSgt = pbperslist::where('trade', 'Sec Asst (GD)')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $adminAsstSwo = pbperslist::where('trade', 'admin Asst')->where('rank', 'SWO')->where('decision', 'true')->count();
        $adminAsstWo = pbperslist::where('trade', 'admin Asst')->where('rank', 'WO')->where('decision', 'true')->count();
        $adminAsstSgt = pbperslist::where('trade', 'admin Asst')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $catAsstSwo = pbperslist::where('trade', 'cat Asst')->where('rank', 'SWO')->where('decision', 'true')->count();
        $catAsstWo = pbperslist::where('trade', 'cat Asst')->where('rank', 'WO')->where('decision', 'true')->count();
        $catAsstSgt = pbperslist::where('trade', 'cat Asst')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $secAsstaSwo = pbperslist::where('trade', 'sec Asst (a)')->where('rank', 'SWO')->where('decision', 'true')->count();
        $secAsstaWo = pbperslist::where('trade', 'sec Asst (a)')->where('rank', 'WO')->where('decision', 'true')->count();
        $secAsstaSgt = pbperslist::where('trade', 'Sec Asst (a)')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $pfdiSwo = pbperslist::where('trade', 'PF&DI')->where('rank', 'SWO')->where('decision', 'true')->count();
        $pfdiWo = pbperslist::where('trade', 'PF&DI')->where('rank', 'WO')->where('decision', 'true')->count();
        $pfdiSgt = pbperslist::where('trade', 'PF&DI')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $musicSwo = pbperslist::where('trade', 'Music')->where('rank', 'SWO')->where('decision', 'true')->count();
        $musicWo = pbperslist::where('trade', 'Music')->where('rank', 'WO')->where('decision', 'true')->count();
        $musicSgt = pbperslist::where('trade', 'Music')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $gcSwo = pbperslist::where('trade', 'gc')->where('rank', 'SWO')->where('decision', 'true')->count();
        $gcWo = pbperslist::where('trade', 'gc')->where('rank', 'WO')->where('decision', 'true')->count();
        $gcSgt = pbperslist::where('trade', 'gc')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $provostSwo = pbperslist::where('trade', 'provost')->where('rank', 'SWO')->where('decision', 'true')->count();
        $provostWo = pbperslist::where('trade', 'provost')->where('rank', 'WO')->where('decision', 'true')->count();
        $provostSgt = pbperslist::where('trade', 'provost')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $cyAsstSwo = pbperslist::where('trade', 'cy asst')->where('rank', 'SWO')->where('decision', 'true')->count();
        $cyAsstWo = pbperslist::where('trade', 'cy asst')->where('rank', 'WO')->where('decision', 'true')->count();
        $ednInstrSwo = pbperslist::where('trade', 'Edn Instr')->where('rank', 'SWO')->where('decision', 'true')->count();
        $ednInstrWo = pbperslist::where('trade', 'Edn Instr')->where('rank', 'WO')->where('decision', 'true')->count();
        $fltEngrSwo = pbperslist::where('trade', 'Flt Engr')->where('rank', 'SWO')->where('decision', 'true')->count();
        $fltEngrWo = pbperslist::where('trade', 'Flt Engr')->where('rank', 'WO')->where('decision', 'true')->count();
        $fltEngrSgt = pbperslist::where('trade', 'Flt Engr')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $lmSwo = pbperslist::where('trade', 'LM')->where('rank', 'SWO')->where('decision', 'true')->count();
        $lmWo = pbperslist::where('trade', 'LM')->where('rank', 'WO')->where('decision', 'true')->count();
        $lmSgt = pbperslist::where('trade', 'LM')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $agSwo = pbperslist::where('trade', 'ag')->where('rank', 'SWO')->where('decision', 'true')->count();
        $agWo = pbperslist::where('trade', 'ag')->where('rank', 'WO')->where('decision', 'true')->count();
        $agSgt = pbperslist::where('trade', 'ag')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $airStdSwo = pbperslist::where('trade', 'air Std')->where('rank', 'SWO')->where('decision', 'true')->count();
        $airStdWo = pbperslist::where('trade', 'air Std')->where('rank', 'WO')->where('decision', 'true')->count();
        $airStdSgt = pbperslist::where('trade', 'air Std')->where('rank', 'Sgt')->where('decision', 'true')->count();
        $ttlSwo = pbperslist::where('rank', 'SWO')->where('decision', 'true')->count();
        // dd($acFittSwo);
        $ttlWo = pbperslist::where('rank', 'WO')->where('decision', 'true')->count();
        $ttlSgt = pbperslist::where('rank', 'Sgt')->where('decision', 'true')->count();
        $ttlRecommendation = pbperslist::where('decision', 'true')->count();
        // dd($ttlRecommendation);
        $recomList = array(
            $acFittSwo, $acFittWo, $acFittSgt,
            $eiFittSwo, $eiFittWo, $eiFittSgt,
            $armtFittSwo, $armtFittWo, $armtFittSgt,
            $lsewSwo, $lsewWo, $lsewSgt,
            $photoSwo, $photoWo, $photoSgt,
            $radioFittSwo, $radioFittWo, $radioFittSgt,
            $genEngrSwo, $genEngrWo, $genEngrSgt,
            $mtofSwo, $mtofWo, $mtofSgt,
            $mtoSwo, $mtoWo, $mtoSgt,
            $gsSwo, $gsWo, $gsSgt,
            $radarOptrSwo, $radarOptrWo, $radarOptrSgt,
            $atcaSwo, $atcaWo, $atcaSgt,
            $metAsstSwo, $metAsstWo, $metAsstSgt,
            $medAsstSwo, $medAsstWo, $medAsstSgt,
            $logAsstSwo, $logAsstWo, $logAsstSgt,
            $secAsstgdSwo, $secAsstgdWo, $secAsstgdSgt,
            $adminAsstSwo, $adminAsstWo, $adminAsstSgt,
            $catAsstSwo, $catAsstWo, $catAsstSgt,
            $secAsstaSwo, $secAsstaWo, $secAsstaSgt,
            $pfdiSwo, $pfdiWo, $pfdiSgt,
            $musicSwo, $musicWo, $musicSgt,
            $gcSwo, $gcWo, $gcSgt,
            $provostSwo, $provostWo, $provostSgt,
            $cyAsstSwo, $cyAsstWo,
            $ednInstrSwo, $ednInstrWo,
            $fltEngrSwo, $fltEngrWo, $fltEngrSgt,
            $lmSwo, $lmWo, $lmSgt,
            $agSwo, $agWo, $agSgt,
            $airStdSwo, $airStdWo, $airStdSgt,
            $ttlSwo, $ttlWo, $ttlSgt, $ttlRecommendation,
        );

        // $trades = pbperslist::       //         ->select('trade', 'rank')
        //         ->distinct('trade')
        //         ->get();
        //         // dd($trades);

        //   dd($recomList);
        return $recomList;
    }
    function DashboardPage():View{
        $recomList = $this->data();
        return view('pages.dashboard.dashboard-page', compact('recomList'));
    }


    function Summary(Request $request):array{

        $user_id=$request->header('id');

        $pbpers = DB::table('pbperslists')
                ->count();
        $pbrecom = DB::table('pbperslists')->where('decision', 'true')
                ->count();
        $users = DB::table('users')
                ->count();


        return [
            'pbpers'=> $pbpers,
            'pbrecom'=>$pbrecom,
            'users'=> $users,
        ];


    }
}
