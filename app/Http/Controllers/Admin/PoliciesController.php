<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoliciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    dd('policies');
        $policies = DB::table('policies')->get();
        $count=1;
        return view('admin.policies', compact('policies', 'count'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $name = $request->name;
        $subject = $request->subject;
        $published_on = $request->published_on;
        $policy_for = $request->policy_for;
        $fileName = $request->policyFile;
        // dd($fileName);
        // $file = $request->file('policyName');
        // $file->move('policies/');

        $policyData = DB::insert('insert into policies (name, subject, published_on, policy_for, filename) values(?,?,?,?,?)', [$name, $subject, $published_on, $policy_for, $fileName]);

        return redirect()->back()->with("success","Data inserted successfully.");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $name = $request->name;
        // dd($name);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $name = $request->name;
        $subject = $request->subject;
        $published_on = $request->published_on;
        $policy_for = $request->policy_for;
        $fileName = $request->policyFile;
        // dd($fileName);
        // $file = $request->file('policyName');
        // $file->move('policies/');

        // $policyData = DB::update('UPDATE policies (name, subject, published_on, policy_for, filename) values(?,?,?,?,?) where id=?', [$name, $subject, $published_on, $policy_for, $fileName, $id]) ;

        $policyData = DB::table('policies')->where('id', $id)->update(['name'=>$name, 'subject'=>$subject, 'published_on'=>$published_on, 'policy_for'=>$policy_for, 'filename'=>$fileName] );
        return redirect()->back()->with("success","Data update successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $deleteData = DB::table('policies')->where('id', $id)->delete();
       return redirect()->back()->with('delete', 'Delete data successfully.');
    }
}
