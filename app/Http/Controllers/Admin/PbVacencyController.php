<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pbCurrentEstbStrVac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\trade;
use App\Models\rank;

class PbVacencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $pbCurrentVacs = pbCurrentEstbStrVac::query();
        if ($query) {
            $pbCurrentVacs->orWhere('trade', 'like', "%{$query}%");
        }
        $results = $pbCurrentVacs->paginate(10);
        $trades = trade::get();
        $ranks = rank::get();
        return view('admin.pbCurrentVac', compact('results', 'trades', 'ranks'));
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
        $remarks = $request->remarks;
        $sheetNo = $request->sheetNo;
        // dd($str);

        pbCurrentEstbStrVac::create([
            'trade' => $trade,
            'rank' => $rank,
            'estb' => $estb,
            'str' => $str,
            'exist' => $exist,
            'retd' => $retd,
            'promoted_pre_pb' => $promoted_pre_pb,
            'ttl' => $ttl,
            'remarks' => $remarks ?? '',
            'sheetNo' => $sheetNo
        ]);
        return redirect()->back()->with("success", "Data inserted successfully.");
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
        $promoted_pre_pb = $request->promoted_pre_pb;
        $ttl = $request->ttl;
        $remarks = $request->remarks;
        $sheetNo = $request->sheetNo;

        $current_vac = pbCurrentEstbStrVac::find($id);

        $current_vac->update([
            'trade' => $trade,
            'rank' => $rank,
            'estb' => $estb,
            'str' => $str,
            'exist' => $exist,
            'retd' => $retd,
            'promoted_pre_pb' => $promoted_pre_pb,
            'ttl' => $ttl,
            'remarks' => $remarks,
            'sheetNo' => $sheetNo
        ]);

        return redirect()->back()->with("success", "Data update successfully.");
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
