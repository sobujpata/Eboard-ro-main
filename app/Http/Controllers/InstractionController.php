<?php

namespace App\Http\Controllers;

use App\Models\Instraction;
use App\Models\User;
use Illuminate\Http\Request;

class InstractionController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $instraction = Instraction::first();
        return view('pb.instraction', compact('user', 'instraction'));
    }
}
