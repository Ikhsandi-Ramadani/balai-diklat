<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Peserta;
use App\Models\Category;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\PesertaDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        $blogCount = Blog::all()->count();
        $pelatihanCount = Pelatihan::all()->count();
        $pesertaCount = PesertaDetail::all()->count();
        $categoryCount = Category::all()->count();
        $lastPeserta = PesertaDetail::latest()->take(5)->get();
        $lastPelatihan = Pelatihan::latest()->take(5)->get();
        // dd($blogCount);
        return view('admin.pages.dashboard.index',compact('blogCount','pelatihanCount','pesertaCount','categoryCount','lastPeserta','lastPelatihan'));
    }

    public function peserta()
    {
        $pesertas = Peserta::withCount('peserta_detail')->get();
        return view('admin.pages.peserta.index', compact('pesertas'));
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
