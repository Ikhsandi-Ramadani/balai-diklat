@extends('user.base')

@section('content')
    <!-- ============================ Dashboard: Dashboard Start ================================== -->
    <section class="gray pt-4">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="dashboard-navbar">

                        <div class="d-user-avater">
                            <img src="https://via.placeholder.com/500x500" class="img-fluid avater" alt="">
                            <h4>{{ $peserta->nama }}</h4>
                            <span>{{ $peserta->email }}</span>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12">

                    <!-- Row -->
                    <div class="row justify-content-between">
                        <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                            <div class="dashboard_wrap d-flex align-items-center justify-content-between">
                                <div class="arion">
                                    <nav class="transparent">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="dashboard_wrap">

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                        <h6 class="m-0">Informasi Dasar</h6>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <form method="POST" action="{{ route('peserta.dashboard-edit', $peserta->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group smalls">
                                                <label>NIK</label>
                                                <input type="text" class="form-control" name="nik"
                                                    value="{{ $peserta->nik }}" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control"
                                                    value="{{ $peserta->nama }}" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Email</label>
                                                <input type="email" class="form-control" value="{{ $peserta->email }}"
                                                    name="email" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>No. Telpon</label>
                                                <input type="text" class="form-control" name="no_telp"
                                                    value="{{ $peserta->no_telp }}" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Alamat</label>
                                                <textarea class="form-control" name="alamat">{{ $peserta->alamat }}</textarea>
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Password</label> <br>
                                                <small>**Isi jika anda ingin mengganti password anda</small>
                                                <input type="password" class="form-control" name="password" />
                                            </div>
                                            <div class="form-group smalls">
                                                <button class="btn theme-bg text-white" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="dashboard_wrap">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                        <h6 class="m-0">Kelengkapan Berkas</h6>
                                        <small>**Semua berkas dalam bentuk file pdf kecuali foto</small>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <form>
                                            <div class="form-group smalls">
                                                <label>FC Kartu Keluarga </label>
                                                <div class="d-flex align-items-center">
                                                    <input type="file" class="form-control"
                                                        value="{{ $peserta->peserta_detail->fc_kk != null ? $peserta->peserta_detail->fc_kk : '' }}" />
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-2 ml-2 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group smalls">
                                                <label>FC KTP </label>
                                                <div class="d-flex align-items-center">
                                                    <input type="file" class="form-control" />
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-2 ml-2 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Surat Ket. Berbadan Sehat </label>
                                                <div class="d-flex align-items-center">
                                                    <input type="file" class="form-control" />
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-2 ml-2 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Surat Ket. Usaha </label>
                                                <div class="d-flex align-items-center">
                                                    <input type="file" class="form-control" />
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-2 ml-2 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group smalls">
                                                <label>FC Ijazah Terakhir </label>
                                                <div class="d-flex align-items-center">
                                                    <input type="file" class="form-control" />
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-2 ml-2 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Foto 3x4 (Latar Merah) </label>
                                                <div class="d-flex align-items-center">
                                                    <input type="file" class="form-control" />
                                                    <div
                                                        class="rounded-circle bg-light-success theme-cl p-2 ml-2 small d-flex align-items-center justify-content-center">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group smalls">
                                                <button class="btn theme-bg text-white" type="button">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="dashboard_wrap">

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                        <h6 class="m-0">Kelas yang diikuti</h6>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Dashboard: Dashboard End ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <section class="theme-bg call_action_wrap-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="call_action_wrap">
                        <div class="call_action_wrap-head">
                            <h3>Do You Have Questions ?</h3>
                            <span>We'll help you to grow your career and growth.</span>
                        </div>
                        <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Call To Action End ================================== -->
@endsection
