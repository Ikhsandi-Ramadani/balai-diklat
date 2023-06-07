<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use PDF;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use App\Models\PesertaDetail;
use Carbon\Carbon;
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
        $data = "Nama  : " . $peserta->peserta->nama . "\n" . "NIK  : " . $peserta->peserta->nik . "\n" . "Status Verifikasi : " . $peserta->status;
        $kamar = rand(1, 75) . $char[$key];
        $kursi = rand(1, 75);

        $pdf = PDF::loadView('user.pages.cetak', compact('peserta', 'data', 'kamar', 'kursi'));
        $pdf->set_paper(array(0, 0, 297.64, 419.53));
        return $pdf->download('Kartu.pdf');
    }

    public function sertifikat($id)
    {
        $peserta = PesertaDetail::where('peserta_id', $id)->first();
        $nama = $peserta->peserta->nama;
        $ttl = $peserta->peserta->tempat_lahir . ", " . Carbon::parse($peserta->peserta->tanggal_lahir)->isoFormat('D MMMM YYYY');
        $gambar = public_path("sertifikat.jpg");

        $image = imagecreatefromjpeg($gambar);
        $white = imageColorAllocate($image, 255, 255, 255);
        $black = imageColorAllocate($image, 0, 0, 0);
        $font = public_path("Roboto-Regular.ttf");
        $size = 20;
        //definisikan lebar gambar agar posisi teks selalu ditengah berapapun jumlah hurufnya
        $image_width = imagesx($image);
        //membuat textbox agar text centered
        $text_box = imagettfbbox($size, 0, $font, $nama);
        //generate sertifikat beserta namanya
        // Untuk Nama
        imagettftext($image, $size, 0, 650, 505, $black, $font, $nama);
        // TTL
        imagettftext($image, $size, 0, 650, 535, $black, $font, $ttl);
        // NIK
        imagettftext($image, $size, 0, 650, 565, $black, $font, $peserta->peserta->nik);
        // Foto
        // imagettftext($image, $size, 0, 650, 600, $black, $font, $foto);
        //tampilkan di browser
        // imagecopy($image, $foto, 150, 900, 0, 0, 300, 300);
        header("Content-type:  image/jpeg");
        header('Content-Disposition: attachment; filename=sertifikat.jpg'); // This will tell the browser to download it
        imagejpeg($image);
        imagedestroy($image);
    }
}
