<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $peserta = Auth::guard('peserta')->user();
        return view('user.pages.dashboard', compact('peserta'));
    }

    public function editProfil(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:peserta,email,' . $id,
            'nik' => 'required|unique:peserta,nik,' . $id
        ]);

        $peserta = Peserta::findorfail($id);

        if ($request->password) {
            $peserta->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'nik' => $request->nik,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat
            ]);
        } else {
            $peserta->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'nik' => $request->nik,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat
            ]);
        }
        return redirect()->route('peserta.dashboard');;
    }
}
