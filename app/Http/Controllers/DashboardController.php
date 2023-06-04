<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use PDF;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\PesertaDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $id = Auth::guard('peserta')->user()->id;
        $peserta = Peserta::where('id', $id)->first();
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
        } else {
            $peserta->update([
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jekel' => $request->jekel,
                'pekerjaan' => $request->pekerjaan,
                'email' => $request->email,
                'nik' => $request->nik,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat
            ]);
        }
        return redirect()->route('peserta.dashboard');;
    }

    public function cetak($id)
    {
        $peserta = PesertaDetail::where('peserta_id', $id)->first();

        $char = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
        $key = array_rand($char);
        $data = "Pelatihan  : " . $peserta->pelatihan->nama . "\n" . "No. Kamar : " .  rand(1, 75) . $char[$key] . "\n" . "No. Kursi : " .  rand(1, 75) . "\n" . "Alamat   : " .  $peserta->peserta->alamat;

        $pdf = PDF::loadView('user.pages.cetak', compact('peserta', 'data'));
        $pdf->set_paper(array(0, 0, 297.64, 419.53));
        return $pdf->download('Kartu.pdf');
    }
}
