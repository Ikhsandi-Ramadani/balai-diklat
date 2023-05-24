@extends('user.base')

@push('custom-style')
    <style>
        .crs_log__thumb {
            height: 100%;
            width: 100%;
            position: relative;
        }
    </style>
@endpush

@section('content')
    <!-- ============================ Login Wrap ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                    <form method="POST" action="{{ route('peserta.post-daftar') }}" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        @csrf
                        <div class="crs_log_wrap">
                            <div class="crs_log__thumb">
                                <img src="/images/pelatihan/{{ $pelatihan->gambar }}" class="img-fluid" alt="" />
                            </div>
                            <div class="crs_log__caption">
                                <div class="rcs_log_124">
                                    <div class="Lpo09">
                                        <h4>Silahkan isi form dibawah ini</h4>
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" class="form-control" required
                                            value="{{ $peserta->nik }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" required
                                            value="{{ $peserta->nama }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required
                                            value="{{ $peserta->email }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telpon</label>
                                        <input type="text" name="no_telp" class="form-control" required
                                            value="{{ $peserta->no_telp }}" />
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" cols="30" rows="10" class="form-control" required>{{ $peserta->alamat }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>FC Kartu Keluarga</label>
                                        <input type="file" name="fc_kk" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>FC KTP</label>
                                        <input type="file" name="fc_ktp" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Ket. Berbadan Sehat</label>
                                        <input type="file" name="surat_sehat" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Ket. Usaha</label>
                                        <input type="file" name="surat_usaha" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Ijazah Terakhir</label>
                                        <input type="file" name="ijazah" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Foto 3x4 (Latar Merah)</label>
                                        <input type="file" name="foto" class="form-control" required />
                                    </div>
                                    <input type="hidden" name="peserta_id" value="{{ $peserta->id }}">
                                    <input type="hidden" name="pelatihan_id" value="{{ $pelatihan->id }}">

                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn full-width btn-md theme-bg text-white">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Login Wrap ================================== -->
@endsection

@push('custom-script')
    <script>
        function validateForm() {
            var result = confirm("Apakah Data yang anda isi sudah benar ?");
            if (result) {
                return true;
            } else {
                return false;
            }
        }
    </script>
@endpush
