<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use App\Models\Trade;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function NavSettings(){
        $trades = Trade::with('navbars')->get();
        return view('admin.nav-settings', compact('trades'));
    }

    public function NavEdit(Request $request){
        $request->validate([
            'trade_id' => 'required|exists:trades,id',
            'name' => 'required|string|max:255',
            'page_no' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
        
        Navbar::create([
            'trade_id' => $request->trade_id,
            'name' => $request->name,
            'page_no' => $request->page_no,
            'url' => $request->url,
            'status' => $request->status
        ])->saveOrFail();

        return redirect()->back()->with('success', 'Navigation updated successfully.');
    }
}
