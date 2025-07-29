<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        // $Nav_menus = Menu::with('parent')->orderBy('parent_id')->orderBy('order')->get();
        $query = Menu::with('parent');

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('url', 'like', '%' . $request->search . '%');
        }

        $Nav_menus = $query->orderBy('parent_id')->orderBy('order')->paginate(15);

        return view('admin.menus.index', compact('Nav_menus'));
    }

    public function create()
    {
        $parents = Menu::pluck('title', 'id');
        return view('admin.menus.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'nullable|integer'
        ]);

        Menu::create($request->all());

        return redirect()->route('admin.menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        $parents = Menu::pluck('title', 'id');
        return view('admin.menus.edit', compact('menu', 'parents'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'nullable|integer'
        ]);

        $menu->update($request->all());

        return redirect()->route('admin.menus.index', ['edited_id' => $menu->id])->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', 'Menu deleted.');
    }
}
