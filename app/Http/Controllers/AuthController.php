<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::guard('peserta')->check()) {
            return redirect()->route('peserta.dashboard');
        }
        return view('user.pages.login');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('peserta')->attempt($credentials)) {
            return redirect()->route('peserta.dashboard');
        }

        return redirect()->route('user.login');
    }

    public function register()
    {
        return view('user.pages.register');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:peserta',
            'password' => 'required|min:6',
            'nik' => 'required|unique:peserta',
        ]);
        Peserta::create([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jekel' => $request->jekel,
            'pekerjaan' => $request->pekerjaan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('peserta.dashboard');;
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('user.login');
    }
}
