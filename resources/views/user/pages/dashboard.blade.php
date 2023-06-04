@extends('user.base')

@push('custom-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

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
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control"
                                                    value="{{ $peserta->tempat_lahir }}" />
                                            </div>
                                            <div class="form-group smalls">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control"
                                                    value="{{ $peserta->tanggal_lahir }}" />
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-6">
                                                        <input id="p" class="checkbox-custom form-control"
                                                            value="P" name="jekel" type="radio"
                                                            {{ $peserta->jekel == 'P' ? 'checked' : '' }}>
                                                        <label for="p"
                                                            class="checkbox-custom-label">Perempuan</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-6">
                                                        <input id="l" class="checkbox-custom form-control"
                                                            value="L" name="jekel" type="radio"
                                                            {{ $peserta->jekel == 'L' ? 'checked' : '' }}>
                                                        <label for="l"
                                                            class="checkbox-custom-label">Laki-laki</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" name="pekerjaan" class="form-control"
                                                    value="{{ $peserta->pekerjaan }}" />
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

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="dashboard_wrap">

                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                        <h6 class="m-0">Kelas yang diikuti</h6>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        @php
                                            if ($peserta->peserta_detail) {
                                                $pelatihan = $peserta->peserta_detail->pelatihan;
                                                $jumlah = App\Models\PesertaDetail::where('pelatihan_id', $pelatihan->id)->count();
                                            }
                                        @endphp
                                        @if ($peserta->peserta_detail)
                                            <div class="crs_grid">
                                                <div class="crs_grid_thumb">
                                                    <a href="{{ route('user.detail-pelatihan', $pelatihan->slug) }}"
                                                        class="crs_detail_link">
                                                        <img src="/images/pelatihan/{{ $pelatihan->gambar }}"
                                                            class="img-fluid rounded" alt="" />
                                                    </a>
                                                </div>
                                                <div class="crs_grid_caption">
                                                    <div class="crs_flex">
                                                        <div class="crs_fl_first">
                                                            <div class="crs_cates cl_8">
                                                                <span>{{ $pelatihan->category->nama }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="crs_fl_last">
                                                            <div class="crs_inrolled">
                                                                <strong>{{ $jumlah }}</strong>Pendaftar
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="crs_title">
                                                        <h4><a href="{{ route('user.detail-pelatihan', $pelatihan->slug) }}"
                                                                class="crs_title_link">{{ $pelatihan->nama }}</a></h4>
                                                    </div>
                                                    <div class="crs_info_detail">
                                                        <ul class="d-flex justify-content-between">
                                                            <li><i class="fa fa-calendar text-danger"></i><span>{{ \Carbon\Carbon::parse($pelatihan->awal_pelatihan)->isoFormat('D') }}
                                                                    -
                                                                    {{ \Carbon\Carbon::parse($pelatihan->akhir_pelatihan)->isoFormat('D MMMM Y') }}</span>
                                                            </li>
                                                            <li><i
                                                                    class="fa fa-signal text-warning"></i><span>Pemula</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="crs_grid_foot">
                                                    <div class="crs_flex">
                                                        <div class="crs_fl_first">
                                                            <div class="crs_tutor">
                                                                <div class="crs_tutor_name">
                                                                    <h6>Status verifikasi :
                                                                        @if ($peserta->peserta_detail->status == 'pending')
                                                                            <span
                                                                                class="badge badge-warning">Pending</span>
                                                                        @elseif ($peserta->peserta_detail->status == 'disetujui')
                                                                            <span
                                                                                class="badge badge-success">Disetujui</span>
                                                                        @else
                                                                            <span class="badge badge-danger">Ditolak</span>
                                                                        @endif
                                                                    </h6>
                                                                    <h6>Keterangan :
                                                                        {{ $peserta->peserta_detail->keterangan }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="crs_fl_last">
                                                            <div class="crs_linkview">
                                                                @if ($peserta->peserta_detail->status == 'disetujui')
                                                                    <a href="{{ route('peserta.cetak', $peserta->id) }}"
                                                                        class="btn btn_view_detail btn-success text-light"><i
                                                                            class="fa-solid fa-print"></i> Cetak KP</a>
                                                                @elseif ($peserta->peserta_detail->status == 'lulus')
                                                                    <a href="{{ route('peserta.cetak', $peserta->id) }}"
                                                                        class="btn btn_view_detail btn-success text-light"><i
                                                                            class="fa-solid fa-print"></i> Sertifikat</a>
                                                                @else
                                                                    <a href="{{ route('peserta.daftar-pelatihan', $pelatihan->slug) }}"
                                                                        class="btn btn_view_detail btn-warning text-light"><i
                                                                            class="fa-solid fa-pen-to-square"></i> Edit</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <p>Anda belum mendaftar kelas</p>
                                        @endif
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

@endsection
