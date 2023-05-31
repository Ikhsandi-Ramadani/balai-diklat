<?php

namespace App\Http\Controllers\Admin;

use ZipArchive;
use App\Models\Category;
use App\Models\Pelatihan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PesertaDetail;
use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Support\Facades\File;

// use Illuminate\Support\Facades\File;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihans = Pelatihan::all();
        return view('admin.pages.pelatihan.index', compact('pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.pelatihan.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $slug = Str::slug($request->nama);
        $gambar = $request->file('gambar');
        $destinationPath = 'images/pelatihan';
        $profileImage = $slug . "." . $gambar->getClientOriginalExtension();
        $gambar->move($destinationPath, $profileImage);

        Pelatihan::create([
            'gambar' => $profileImage,
            'nama' => $request->nama,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
            'awal_pendaftaran' => $request->awal_pendaftaran,
            'akhir_pendaftaran' => $request->akhir_pendaftaran,
            'awal_pelatihan' => $request->awal_pelatihan,
            'akhir_pelatihan' => $request->akhir_pelatihan,
        ]);

        return redirect()->route('admin.pelatihan.index')->with(['success' => 'Pelatihan Berhasil Ditambahkan']);
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
        $pelatihan = Pelatihan::findorfail($id);
        $categories = Category::all();
        return view('admin.pages.pelatihan.edit', compact('pelatihan', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $pelatihan = Pelatihan::findorfail($id);
        $slug = Str::slug($request->nama);
        if ($request->file('gambar')) {
            $file_path = public_path() . "/images/pelatihan/" . $pelatihan->gambar;
            unlink($file_path);

            $gambar = $request->file('gambar');
            $destinationPath = 'images/pelatihan';
            $profileImage = $slug . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);

            $pelatihan->update([
                'gambar' => $profileImage,
                'nama' => $request->nama,
                'slug' => $slug,
                'deskripsi' => $request->deskripsi,
                'category_id' => $request->category_id,
                'awal_pendaftaran' => $request->awal_pendaftaran,
                'akhir_pendaftaran' => $request->akhir_pendaftaran,
                'awal_pelatihan' => $request->awal_pelatihan,
                'akhir_pelatihan' => $request->akhir_pelatihan,
            ]);
        } else {
            $pelatihan->update([
                'nama' => $request->nama,
                'slug' => $slug,
                'deskripsi' => $request->deskripsi,
                'category_id' => $request->category_id,
                'awal_pendaftaran' => $request->awal_pendaftaran,
                'akhir_pendaftaran' => $request->akhir_pendaftaran,
                'awal_pelatihan' => $request->awal_pelatihan,
                'akhir_pelatihan' => $request->akhir_pelatihan,
            ]);
        }

        return redirect()->route('admin.pelatihan.index')->with(['success' => 'Pelatihan Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelatihan = Pelatihan::where('id', $id)->first();
        $file_path = public_path() . "/images/pelatihan/" . $pelatihan->gambar;
        unlink($file_path);
        $pelatihan->delete();
        return redirect()->route('admin.pelatihan.index')->with(['success' => 'Pelatihan Berhasil Dihapus']);
    }

    public function peserta($id)
    {
        $pesertas = PesertaDetail::where('pelatihan_id', $id)->get();
        return view('admin.pages.pelatihan.peserta.index', compact('pesertas'));
    }

    public function editPeserta($id, $peserta)
    {
        $peserta = PesertaDetail::where('peserta_id', $peserta)->where('pelatihan_id', $id)->first();
        return view('admin.pages.pelatihan.peserta.edit', compact('peserta'));
    }

    public function postEditPeserta(Request $request, $id, $peserta)
    {
        $peserta = PesertaDetail::where('peserta_id', $peserta)->where('pelatihan_id', $id)->first();

        $peserta->update([
            'is_approve' => $request->is_approve,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('admin.pelatihan.peserta', $id);
    }

    public function downloadPeserta($peserta)
    {
        $peserta = Peserta::where('id', $peserta)->first();

        $zip = new ZipArchive;
        $fileName = $peserta->nama . '.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path('data-peserta/' . $peserta->nama));
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();
        }

        return response()->download(public_path($fileName))->deleteFileAfterSend(true);
    }
}
