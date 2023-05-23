<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $categories = Category::withCount('pelatihan')->get();
        $pelatihans = Pelatihan::latest()->take(6)->get();
        return view('user.pages.home', compact('categories', 'pelatihans'));
    }

    public function pelatihan()
    {
        $pelatihans = Pelatihan::all();
        return view('user.pages.pelatihan', compact('pelatihans'));
    }

    public function detail_pelatihan($slug)
    {
        $pelatihan = Pelatihan::where('slug', $slug)->first();
        return view('user.pages.detail_pelatihan', compact('pelatihan'));
    }
}
