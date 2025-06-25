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
}
