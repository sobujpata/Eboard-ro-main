<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    function DashboardPage():View{
        return view('pages.dashboard.dashboard-page');
    }

  
    function Summary(Request $request):array{

        $user_id=$request->header('id');

        $pbpers = DB::table('pbperslist')
                ->count();
        $pbrecom = DB::table('pbperslist')->where('decision', 'true')
                ->count();
        $users = DB::table('users')
                ->count();
        $policy = DB::table('policies')
                ->count();


        return [
            'pbpers'=> $pbpers,
            'pbrecom'=>$pbrecom, 
            'users'=> $users,
            'policy'=> $policy
        ];


    }
}
