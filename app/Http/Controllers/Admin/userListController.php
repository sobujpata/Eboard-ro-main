<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class UserListController extends Controller
{
    public function index(){
        $users = User::all();
        return view("admin.users",compact("users"));
    }
    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
