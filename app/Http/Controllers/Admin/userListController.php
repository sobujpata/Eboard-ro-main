<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class UserListController extends Controller
{
    public function index(){
        $users = User::all();
        return view("admin.users",compact("users"));
    }

    function store(Request $request){
        try {
            User::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'userName' => $request->input('userName'),
                'email' => $request->input('email'),
                'type' => $request->input('type'),
                'password' => $request->input('password'),
            ]);
            return redirect()->back()->with('success', 'User Created Successfully.');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'User Created Failed.');

        }
    }
    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
