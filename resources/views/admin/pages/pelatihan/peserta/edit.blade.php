@extends('admin.base')

@section('title', 'Edit Peserta')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profil Peserta /</span> {{ $peserta->peserta->nama }}
        </h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex justify-content-center gap-4">
                            <img src="/data-peserta/{{ $peserta->peserta->nama }}/{{ $peserta->foto }}" alt="user-avatar"
                                class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form method="POST"
                            action="{{ route('admin.pelatihan.peserta.edit.post', ['id' => $peserta->pelatihan_id, 'peserta' => $peserta->peserta_id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama"
                                        value="{{ $peserta->peserta->nama }}" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">NIK</label>
                                    <input class="form-control" type="text" name="nik"
                                        value="{{ $peserta->peserta->nik }}" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir"
                                        value="{{ $peserta->peserta->tempat_lahir }}" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="text" name="tanggal_lahir"
                                        value="{{ $peserta->peserta->tanggal_lahir }}" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="text" name="email"
                                        value="{{ $peserta->peserta->email }}" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No. Telpon</label>
                                    <input class="form-control" type="text" name="no_telp"
                                        value="{{ $peserta->peserta->no_telp }}" readonly />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Alamat</label>
                                    <textarea name="alamat" id="" cols="30" rows="3" class="form-control" readonly>{{ $peserta->peserta->alamat }}</textarea>
                                </div>
                                <div class="mb-3 mt-4 col-md-6">
                                    <a href="{{ route('admin.pelatihan.peserta.download', $peserta->peserta_id) }}"
                                        class="btn btn-warning me-2">Lihat Berkas</a>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Keterangan</label>
                                    <textarea name="keterangan" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Status Verifikasi</label>
                                    <div class="col mt-2">
                                        <div class="form-check form-check-inline form-check-success">
                                            <input name="status" class="form-check-input" type="radio" value="disetujui"
                                                {{ $peserta->status == 'disetujui' ? 'checked' : '' }}>
                                            <label class="form-check-label">Disetujui</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-danger">
                                            <input name="status" class="form-check-input" type="radio" value="ditolak"
                                                {{ $peserta->status == 'ditolak' ? 'checked' : '' }}>
                                            <label class="form-check-label">Ditolak</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
@endsection
