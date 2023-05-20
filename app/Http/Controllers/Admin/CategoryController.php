<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.kategori.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $slug = Str::slug($request->nama);
        $icon = $request->file('icon');
        $destinationPath = 'images/kategori';
        $profileImage = $slug . "." . $icon->getClientOriginalExtension();
        $icon->move($destinationPath, $profileImage);

        $data = Category::create([
            'icon' => $profileImage,
            'nama' => $request->nama,
            'slug' => $slug
        ]);

        return redirect()->back();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'icon' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $category = Category::findorfail($id);
        $slug = Str::slug($request->nama);

        if ($request->file('icon')) {
            $icon = $request->file('icon');
            $destinationPath = 'images/kategori';
            $profileImage = $slug . "." . $icon->getClientOriginalExtension();
            $icon->move($destinationPath, $profileImage);

            $category->update([
                'icon' => $profileImage,
                'nama' => $request->nama,
                'slug' => $slug
            ]);
        } else {
            $category->update([
                'nama' => $request->nama,
                'slug' => $slug
            ]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findorfail($id);
        $category->delete();
        return redirect()->back();
    }
}
