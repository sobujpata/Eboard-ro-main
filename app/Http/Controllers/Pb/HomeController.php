<?php

namespace App\Http\Controllers\Pb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;
use App\Models\User;

class HomeController extends Controller
{
    function pbHomePage(Request $request){
        $user_id = $request->header("id");
        $user = User::find($user_id);
        $policies = Policy::where('policy_for', '=', 'pb')->get();
        if($user->lastName !== "pb"){
            return redirect()->back()->with("error","You are unauthorize.");
        }else{

            return view('pb.pb-home-page', compact('user', 'policies'));
        }
    }
}
