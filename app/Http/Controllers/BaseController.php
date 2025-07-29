<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bases = \App\Models\Base::all();
        return view('admin.bases.index', compact('bases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'full_name' => 'nullable|string|max:255',
        ]);

        \App\Models\Base::create($request->all());

        return redirect()->route('admin.bases.index')->with('success', 'Base created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $base = \App\Models\Base::findOrFail($id);
        return view('admin.bases.show', compact('base'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $base = \App\Models\Base::findOrFail($id);
        return view('admin.bases.edit', compact('base'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'full_name' => 'nullable|string|max:255',
        ]);

        $base = \App\Models\Base::findOrFail($id);
        $base->update($request->all());

        return redirect()->route('admin.bases.index')->with('success', 'Base updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $base = \App\Models\Base::findOrFail($id);
        $base->delete();

        return redirect()->route('admin.bases.index')->with('success', 'Base deleted successfully.');
    }
}
