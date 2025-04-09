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
        if($user->lastName !== "pb"){
            return redirect()->back()->with("error","You are unauthorize.");
        }else{

            return view('pb.pb-home-page');
        }
    }
    public function policy(Request  $request){
        $user_id = $request->header('id');
        $userName = User::where('id', $user_id)->select('userName')->first();
        $data = Policy::where('policy_for', '=', 'pb')->get();
        return response()->json([
            'status'=>'success',
            'message'=>'Policy get successfully',
            'data'=>$data,
            'userName'=>$userName,
        ]);
    }
}
