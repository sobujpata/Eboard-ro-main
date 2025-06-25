<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
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

    $request->validate([
        'name' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'published_on' => 'required|string|max:255',
        'policy_for' => 'required|string|max:255',
        'policyFile' => 'nullable|file|mimes:pdf,doc,docx,pptx|max:2048',
    ]);

    $policy = Policy::find($id);


    if (!$policy) {
        return redirect()->back()->with("error", "Data update Failed.");
    }

    $file_url = $policy->file; // default to existing

    if ($request->hasFile('policyFile')) {
        $policyFile = $request->file('policyFile');
        $t = time();
        $originalName = preg_replace('/\s+/', '-', $policyFile->getClientOriginalName());
        $file_name = "{$t}-{$originalName}";
        $policyFile->move(public_path('policies'), $file_name);
        $file_url = "policies/{$file_name}";
    }

    // dd($file_url); // Remove this in production

    $policy->update([
        'name' => $request->name,
        'subject' => $request->subject,
        'published_on' => $request->published_on,
        'policy_for' => $request->policy_for,
        'file' => $file_url,
    ]);

    return redirect()->back()->with("success", "Data updated successfully.");
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
