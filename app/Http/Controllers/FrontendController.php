<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\PesertaDetail;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    public function daftarPelatihan($slug)
    {
        $pelatihan = Pelatihan::where('slug', $slug)->first();
        $peserta = Auth::guard('peserta')->user();
        return view('user.pages.daftar_pelatihan', compact('pelatihan', 'peserta'));
    }

    public function postDaftarPelatihan(Request $request)
    {
        $fc_kk = $request->file('fc_kk');
        $destinationPath = 'data-peserta/' . $request->nama;
        $fckk = "fc kk" . "." . $fc_kk->getClientOriginalExtension();
        $fc_kk->move($destinationPath, $fckk);

        $fc_ktp = $request->file('fc_ktp');
        $destinationPath = 'data-peserta/' . $request->nama;
        $fcktp = "fc ktp" . "." . $fc_ktp->getClientOriginalExtension();
        $fc_ktp->move($destinationPath, $fcktp);

        $surat_sehat = $request->file('surat_sehat');
        $destinationPath = 'data-peserta/' . $request->nama;
        $s_sehat = "surat sehat" . "." . $surat_sehat->getClientOriginalExtension();
        $surat_sehat->move($destinationPath, $s_sehat);

        $surat_usaha = $request->file('surat_usaha');
        $destinationPath = 'data-peserta/' . $request->nama;
        $s_usaha = "surat usaha" . "." . $surat_usaha->getClientOriginalExtension();
        $surat_usaha->move($destinationPath, $s_usaha);

        $ijazah = $request->file('ijazah');
        $destinationPath = 'data-peserta/' . $request->nama;
        $namaIjazah = "ijazah" . "." . $ijazah->getClientOriginalExtension();
        $ijazah->move($destinationPath, $namaIjazah);

        $foto = $request->file('foto');
        $destinationPath = 'data-peserta/' . $request->nama;
        $namaFoto = "foto" . "." . $foto->getClientOriginalExtension();
        $foto->move($destinationPath, $namaFoto);

        PesertaDetail::updateOrCreate([
            'peserta_id' => $request->peserta_id,
            'pelatihan_id' => $request->pelatihan_id,
            'nama_usaha' => $request->nama_usaha,
            'fc_kk' => $fckk,
            'fc_ktp' => $fcktp,
            'surat_sehat' => $s_sehat,
            'surat_usaha' => $s_usaha,
            'ijazah' => $namaIjazah,
            'foto' => $namaFoto,
        ]);

        return redirect()->route('peserta.dashboard');
    }

    public function qrcode()
    {
        QrCode::generate('Make me into a QrCode!');
    }
}
