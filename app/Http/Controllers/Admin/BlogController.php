<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $slug = Str::slug($request->title);
        $image = $request->file('image');
        $destinationPath = 'images/blog';
        $profileImage = $slug . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);

        Blog::create([
            'image' => $profileImage,
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.blog.index')->with(['success' => 'Blog Berhasil Ditambahkan']);
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
        $blog = Blog::findorfail($id);
        $categories = Category::all();
        return view('admin.pages.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $blog = Blog::findorfail($id);
        $slug = Str::slug($request->title);
        if ($request->file('image')) {
            $file_path = public_path() . "/images/blog/" . $blog->image;
            unlink($file_path);

            $image = $request->file('image');
            $destinationPath = 'images/blog';
            $profileImage = $slug . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);

            $blog->update([
                'image' => $profileImage,
                'title' => $request->title,
                'slug' => $slug,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);
        } else {
            $blog->update([
                'title' => $request->title,
                'slug' => $slug,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);
        }

        return redirect()->route('admin.blog.index')->with(['success' => 'Blog Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::where('id', $id)->first();
        $file_path = public_path() . "/images/blog/" . $blog->image;
        unlink($file_path);
        $blog->delete();
        return redirect()->route('admin.blog.index')->with(['success' => 'Blog Berhasil Dihapus']);
    }
}
