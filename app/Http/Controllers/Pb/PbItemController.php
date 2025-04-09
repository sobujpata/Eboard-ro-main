<?php
namespace App\Http\Controllers\pb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\pbperslist; // Import the Item model

class PbItemController extends Controller
{
    public function updateDecision(Request $request, $id)
    {
        $decision = $request->decision;
        
       $update = pbperslist::where('id', $id)
            ->update(['decision' => $decision]);
            $msg = 'Decision updated successfully';

        return response()->json(['success' => $msg]);
        
    }
    
}
