@extends('user.base')

@push('custom-style')
    <style>
        .property_video:before {
            background: transparent
        }
    </style>
@endpush

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="ed_detail_head">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-2">

                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="dlkio_452">
                        <div class="ed_detail_wrap">
                            <div class="crs_cates cl_3"><span>{{ $pelatihan->category->nama }}</span></div>
                            <div class="ed_header_caption">
                                <h2 class="ed_title">{{ $pelatihan->nama }}</h2>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <div class="rounded-circle d-flex align-items-center justify-content-center">
                                    <img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="70"
                                        alt="" />
                                </div>
                                <div class="ml-2 ml-md-3">
                                    <span>Created By</span>
                                    <h6 class="m-0">BDI Makassar</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Course Detail ================================== -->
    <section class="gray pt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12 order-lg-first">

                    <div class="property_video radius lg mb-4">
                        <div class="thumb">
                            <img class="pro_img img-fluid w100" src="/images/pelatihan/{{ $pelatihan->gambar }}"
                                alt="7.jpg">
                        </div>
                    </div>

                    <div class="edu_wraper">
                        {!! $pelatihan->deskripsi !!}
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12 order-lg-last">

                    <div class="ed_view_box style_2 stick_top">

                        <div class="ed_view_features">
                            <div class="eld mb-3">
                                <ul class="edu_list right">
                                    <li><i class="ti-user"></i>Kuota:<strong>{{ $pelatihan->kuota }} Orang</strong></li>
                                    <li><i class="ti-user"></i>Pendaftar Saat
                                        Ini:<strong>{{ $pelatihan->peserta_detail_count }} Pendaftar</strong></li>
                                    <li><i class="ti-files"></i>Jadwal Pendaftaran
                                        :<strong>{{ \Carbon\Carbon::parse($pelatihan->awal_pendaftaran)->isoFormat('D') }}-{{ \Carbon\Carbon::parse($pelatihan->akhir_pendaftaran)->isoFormat('D MMMM Y') }}</strong>
                                    </li>
                                    <li><i class="ti-game"></i>Jadwal Pelatihan
                                        :<strong>{{ \Carbon\Carbon::parse($pelatihan->awal_pelatihan)->isoFormat('D') }}-{{ \Carbon\Carbon::parse($pelatihan->akhir_pelatihan)->isoFormat('D MMMM Y') }}</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- {{ dd($pelatihan->akhir_pendaftaran) }}
                        {{ dd(date('Y-m-d')) }} --}}
                        <div class="ed_view_link">
                            @if (auth('peserta')->check() &&
                                    $pelatihan->peserta_detail_count < $pelatihan->kuota &&
                                    $pelatihan->akhir_pendaftaran < date('Y-m-d'))
                                <a class="btn theme-bg enroll-btn"
                                    href="{{ route('peserta.daftar-pelatihan', $pelatihan->slug) }}">Daftar
                                    Sekarang<i class="ti-angle-right"></i></a>
                            @elseif ($pelatihan->peserta_detail_count == $pelatihan->kuota)
                                <button class="btn btn-secondary enroll-btn" disabled>Kuota Penuh</button>
                            @elseif ($pelatihan->akhir_pendaftaran >= date('Y-m-d'))
                                <button class="btn btn-secondary enroll-btn" disabled>Pendaftaran Ditutup</button>
                            @else
                                <a class="btn theme-bg enroll-btn" href="#" onclick="alert()">Daftar
                                    Sekarang<i class="ti-angle-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================ Course Detail ================================== -->
@endsection

@push('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        function alert() {
            Swal.fire({
                icon: 'error',
                title: 'Gagal...',
                text: 'Anda Harus Membuat Akun Terlebih Dahulu!',
            })
        }
    </script>
@endpush
