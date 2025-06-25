<?php

namespace App\Http\Controllers\pb;

use App\Models\User;
use App\Models\pbperslist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class pbRecomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function data1()
    {


    }

    public function index(Request $request)
    {
        $user_id = $request->header("id");
        $user = User::find($user_id);

        $datas = pbperslist::where('trade', 'AC Fitt')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas2 = pbperslist::where('trade', 'AC Fitt')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas3 = pbperslist::where('trade', 'AC Fitt')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas4 = pbperslist::where('trade', 'AC Fitt')->where('decision', 'true')->get();
        $datas5 = pbperslist::where('trade', 'Eng Fitt')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas6 = pbperslist::where('trade', 'Eng Fitt')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas7 = pbperslist::where('trade', 'Eng Fitt')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas8 = pbperslist::where('trade', 'Eng Fitt')->where('decision', 'true')->get();
        $datas9 = pbperslist::where('trade', 'E&I Fitt')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas10 = pbperslist::where('trade', 'E&I Fitt')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas11 = pbperslist::where('trade', 'E&I Fitt')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas12 = pbperslist::where('trade', 'E&I Fitt')->where('decision', 'true')->get();
        $datas13 = pbperslist::where('trade', 'Armt Fitt')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas14 = pbperslist::where('trade', 'Armt Fitt')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas15 = pbperslist::where('trade', 'Armt Fitt')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas16 = pbperslist::where('trade', 'Armt Fitt')->where('decision', 'true')->get();
        $datas17 = pbperslist::where('trade', 'LSEW')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas18 = pbperslist::where('trade', 'LSEW')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas19 = pbperslist::where('trade', 'LSEW')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas20 = pbperslist::where('trade', 'LSEW')->where('decision', 'true')->get();
        $datas21 = pbperslist::where('trade', 'Photo')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas22 = pbperslist::where('trade', 'Photo')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas23 = pbperslist::where('trade', 'Photo')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas24 = pbperslist::where('trade', 'Photo')->where('decision', 'true')->get();
        $datas25 = pbperslist::where('trade', 'Radio Fitt')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas26 = pbperslist::where('trade', 'Radio Fitt')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas27 = pbperslist::where('trade', 'Radio Fitt')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas28 = pbperslist::where('trade', 'Radio Fitt')->where('decision', 'true')->get();
        $datas29 = pbperslist::where('trade', 'Gen Engg')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas30 = pbperslist::where('trade', 'Gen Engg')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas31 = pbperslist::where('trade', 'Gen Engg')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas32 = pbperslist::where('trade', 'Gen Engg')->where('decision', 'true')->get();
        $datas33 = pbperslist::where('trade', 'MTOF')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas34 = pbperslist::where('trade', 'MTOF')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas35 = pbperslist::where('trade', 'MTOF')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas36 = pbperslist::where('trade', 'MTOF')->where('decision', 'true')->get();
        $datas37 = pbperslist::where('trade', 'MTO')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas38 = pbperslist::where('trade', 'MTO')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas39 = pbperslist::where('trade', 'MTO')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas40 = pbperslist::where('trade', 'MTO')->where('decision', 'true')->get();
        $datas41 = pbperslist::where('trade', 'GS')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas42 = pbperslist::where('trade', 'GS')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas43 = pbperslist::where('trade', 'GS')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas44 = pbperslist::where('trade', 'GS')->where('decision', 'true')->get();
        $datas45 = pbperslist::where('trade', 'Radar Optr')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas46 = pbperslist::where('trade', 'Radar Optr')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas47 = pbperslist::where('trade', 'Radar Optr')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas48 = pbperslist::where('trade', 'Radar Optr')->where('decision', 'true')->get();
        $datas49 = pbperslist::where('trade', 'ATCA')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas50 = pbperslist::where('trade', 'ATCA')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas51 = pbperslist::where('trade', 'ATCA')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas52 = pbperslist::where('trade', 'ATCA')->where('decision', 'true')->get();
        $datas53 = pbperslist::where('trade', 'Met Asst')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas54 = pbperslist::where('trade', 'Met Asst')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas55 = pbperslist::where('trade', 'Met Asst')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas56 = pbperslist::where('trade', 'Met Asst')->where('decision', 'true')->get();
        $datas57 = pbperslist::where('trade', 'Med Asst')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas58 = pbperslist::where('trade', 'Med Asst')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas59 = pbperslist::where('trade', 'Med Asst')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas60 = pbperslist::where('trade', 'Med Asst')->where('decision', 'true')->get();
        $datas61 = pbperslist::where('trade', 'Log Asst')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas62 = pbperslist::where('trade', 'Log Asst')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas63 = pbperslist::where('trade', 'Log Asst')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas64 = pbperslist::where('trade', 'Log Asst')->where('decision', 'true')->get();
        $datas65 = pbperslist::where('trade', 'Sec Asst (GD)')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas66 = pbperslist::where('trade', 'Sec Asst (GD)')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas67 = pbperslist::where('trade', 'Sec Asst (GD)')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas68 = pbperslist::where('trade', 'Sec Asst (GD)')->where('decision', 'true')->get();
        $datas69 = pbperslist::where('trade', 'Admin Asst')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas70 = pbperslist::where('trade', 'Admin Asst')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas71 = pbperslist::where('trade', 'Admin Asst')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas72 = pbperslist::where('trade', 'Admin Asst')->where('decision', 'true')->get();
        $datas73 = pbperslist::where('trade', 'Cat Asst')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas74 = pbperslist::where('trade', 'Cat Asst')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas75 = pbperslist::where('trade', 'Cat Asst')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas76 = pbperslist::where('trade', 'Cat Asst')->where('decision', 'true')->get();
        $datas77 = pbperslist::where('trade', 'Sec Asst (A)')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas78 = pbperslist::where('trade', 'Sec Asst (A)')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas79 = pbperslist::where('trade', 'Sec Asst (A)')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas80 = pbperslist::where('trade', 'Sec Asst (A)')->where('decision', 'true')->get();
        $datas81 = pbperslist::where('trade', 'PF&DI')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas82 = pbperslist::where('trade', 'PF&DI')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas83 = pbperslist::where('trade', 'PF&DI')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas84 = pbperslist::where('trade', 'PF&DI')->where('decision', 'true')->get();
        $datas85 = pbperslist::where('trade', 'Music')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas86 = pbperslist::where('trade', 'Music')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas87 = pbperslist::where('trade', 'Music')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas88 = pbperslist::where('trade', 'Music')->where('decision', 'true')->get();
        $datas89 = pbperslist::where('trade', 'GC')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas90 = pbperslist::where('trade', 'GC')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas91 = pbperslist::where('trade', 'GC')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas92 = pbperslist::where('trade', 'GC')->where('decision', 'true')->get();
        $datas93 = pbperslist::where('trade', 'Provost')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas94 = pbperslist::where('trade', 'Provost')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas95 = pbperslist::where('trade', 'Provost')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas96 = pbperslist::where('trade', 'Provost')->where('decision', 'true')->get();
        $datas97 = pbperslist::where('trade', 'Cy Asst')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas98 = pbperslist::where('trade', 'Cy Asst')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas99 = pbperslist::where('trade', 'Cy Asst')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas100 = pbperslist::where('trade', 'Cy Asst')->where('decision', 'true')->get();
        $datas101 = pbperslist::where('trade', 'Edn Instr')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas102 = pbperslist::where('trade', 'Edn Instr')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas103 = pbperslist::where('trade', 'Edn Instr')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas104 = pbperslist::where('trade', 'Edn Instr')->where('decision', 'true')->get();
        $datas105 = pbperslist::where('trade', 'Flt Engr')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas106 = pbperslist::where('trade', 'Flt Engr')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas107 = pbperslist::where('trade', 'Flt Engr')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas108 = pbperslist::where('trade', 'Flt Engr')->where('decision', 'true')->get();
        $datas109 = pbperslist::where('trade', 'LM')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas110 = pbperslist::where('trade', 'LM')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas111 = pbperslist::where('trade', 'LM')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas112 = pbperslist::where('trade', 'LM')->where('decision', 'true')->get();
        $datas113 = pbperslist::where('trade', 'AG')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas114 = pbperslist::where('trade', 'AG')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas115 = pbperslist::where('trade', 'AG')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas116 = pbperslist::where('trade', 'AG')->where('decision', 'true')->get();
        $datas117 = pbperslist::where('trade', 'Air Std')->where('rank', 'SWO')->where('decision', 'true')->get();
        $datas118 = pbperslist::where('trade', 'Air Std')->where('rank', 'WO')->where('decision', 'true')->get();
        $datas119 = pbperslist::where('trade', 'Air Std')->where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas120 = pbperslist::where('trade', 'Air Std')->where('decision', 'true')->get();
        $datas121 = pbperslist::where('rank', 'SWO')->where('decision', 'true')->get();
        $datas122 = pbperslist::where('rank', 'WO')->where('decision', 'true')->get();
        $datas123 = pbperslist::where('rank', 'Sgt')->where('decision', 'true')->get();
        $datas124 = pbperslist::where('decision', 'true')->get();



        $recomList = $this->data();
        return view('pb.recomList', compact(
            'recomList',
            'user',
            'datas','datas2','datas3','datas4',
            'datas5','datas6','datas7','datas8',
            'datas9','datas10','datas11','datas12',
            'datas13','datas14','datas15','datas16',
            'datas17','datas18','datas19','datas20',
            'datas21','datas22','datas23','datas24',
            'datas25','datas26','datas27','datas28',
            'datas29','datas30','datas31','datas32',
            'datas33','datas34','datas35','datas36',
            'datas37','datas38','datas39','datas40',
            'datas41','datas42','datas43','datas44',
            'datas45','datas46','datas47','datas48',
            'datas49','datas50','datas51','datas52',
            'datas53','datas54','datas55','datas56',
            'datas57','datas58','datas59','datas60',
            'datas61','datas62','datas63','datas64',
            'datas65','datas66','datas67','datas68',
            'datas69','datas70','datas71','datas72',
            'datas73','datas74','datas75','datas76',
            'datas77','datas78','datas79','datas80',
            'datas81','datas82','datas83','datas84',
            'datas85','datas86','datas87','datas88',
            'datas89','datas90','datas91','datas92',
            'datas93','datas94','datas95','datas96',
            'datas97','datas98','datas99','datas100',
            'datas101','datas102','datas103','datas104',
            'datas105','datas106','datas107','datas108',
            'datas109','datas110','datas111','datas112',
            'datas113','datas114','datas115','datas116',
            'datas117','datas118','datas119','datas120',
            'datas121','datas122','datas123','datas124',

        ));
    }

    /**
     * Show the form for ChartSummary a new resource.
     */
    public function ChartSummary(Request $request)
    {
        $user_id = $request->header("id");
        $user = User::find($user_id);

        $recomList = $this->data();
        return view('pb.chartForSummary', compact('recomList', 'user'));
    }
    /**
     * Show the form for ChartRankSummary a new resource.
     */
    public function ChartRankSummary(Request $request)
    {
        $user_id = $request->header("id");
        $user = User::find($user_id);

        $recomList = $this->data();
        return view('pb.chartForRnkWiseSummary', compact('recomList', 'user'));
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
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
