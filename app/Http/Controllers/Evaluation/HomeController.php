<?php

namespace App\Http\Controllers\Evaluation;

use App\Models\User;
use App\Models\Policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index(Request $request){
        $type = $request->type;
        $user_id = $request->header('id');
        $user = User::find($user_id);
        $userName = $user->userName;
        
        $policies = Policy::where('policy_for', '=', 'eb')->get();

        return view('eb.home-page', compact('userName', 'policies'));

    }

}
