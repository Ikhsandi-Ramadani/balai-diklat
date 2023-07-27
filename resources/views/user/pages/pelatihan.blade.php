@extends('user.base')

@push('custom-style')
    <style>
        .crs_info_detail ul li {
            width: 50%;
            flex: 0 0 50%;
        }

        .col-container {
            min-height: 300px;
            margin: 0 auto;
            display: flex;
        }

        .col {
            padding: 10px;
            margin: 0 10px;
            flex: 1;
        }
    </style>
@endpush

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">Pelatihan yang tersedia</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 bg-white">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Cari Pelatihan</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Course Detail ================================== -->
    <section class="gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-container">
                    @forelse ($pelatihans as $pelatihan)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mx-2 crs_grid col">
                            {{-- <div class="crs_grid col"> --}}
                            <div class="crs_grid_thumb">
                                <a href="{{ route('user.detail-pelatihan', $pelatihan->slug) }}" class="crs_detail_link">
                                    <img src="/images/pelatihan/{{ $pelatihan->gambar }}" class="img-fluid rounded"
                                        alt="" />
                                </a>
                            </div>
                            <div class="crs_grid_caption">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_cates cl_8"><span>{{ $pelatihan->category->nama }}</span></div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="crs_inrolled">
                                            <strong>{{ $pelatihan->peserta_detail_count }}</strong>Pendaftar
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
                                        <li><i class="fa fa-user text-warning"></i><span>{{ $pelatihan->kuota }}
                                                Orang</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="#"><img
                                                        src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                                        alt="" /></a></div>
                                            <div class="crs_tutor_name"><a href="#">BDI Makassar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    @empty
                        <h1>Belum Ada Pelatihan</h1>
                    @endforelse
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->
@endsection
