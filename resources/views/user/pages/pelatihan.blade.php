@extends('user.base')

@push('custom-style')
    <style>
        .crs_info_detail ul li {
            width: 50%;
            flex: 0 0 50%;
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
                        <h1 class="breadcrumb-title">Courses with Full Width</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 bg-white">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Find Courses</li>
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
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="short_wraping">
                        <div class="row m-0 align-items-center justify-content-between">

                            <div class="col-lg-4 col-md-5 col-sm-12  col-sm-6">
                                <div class="shorting_pagination_laft">
                                    <h6 class="m-0">Showing 1-25 of 72</h6>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-7 col-sm-12 col-sm-6">
                                <div class="dlks_152">
                                    <div class="shorting-right mr-2">
                                        <label>Short By:</label>
                                        <div class="dropdown show">
                                            <a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span class="selection">Most Rated</span>
                                            </a>
                                            <div class="drp-select dropdown-menu">
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
                                                <a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lmk_485">
                                        <ul class="shorting_grid">
                                            <li class="list-inline-item"><a href="grid-layout-full.html"
                                                    class="active"><span class="ti-layout-grid2"></span></a></li>
                                            <li class="list-inline-item"><a href="list-layout-with-full.html"><span
                                                        class="ti-view-list"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center">
                @forelse ($pelatihans as $pelatihan)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
                            <div class="crs_grid_thumb">
                                <a href="{{ route('user.detail-pelatihan',$pelatihan->slug) }}" class="crs_detail_link">
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
                                        <div class="crs_inrolled"><strong>8,350</strong>Pendaftar</div>
                                    </div>
                                </div>
                                <div class="crs_title">
                                    <h4><a href="{{ route('user.detail-pelatihan',$pelatihan->slug) }}" class="crs_title_link">{{ $pelatihan->nama }}</a></h4>
                                </div>
                                <div class="crs_info_detail">
                                    <ul class="d-flex justify-content-between">
                                        <li><i class="fa fa-calendar text-danger"></i><span>{{ \Carbon\Carbon::parse($pelatihan->awal_pelatihan)->isoFormat('D') }}
                                                -
                                                {{ \Carbon\Carbon::parse($pelatihan->akhir_pelatihan)->isoFormat('D MMMM Y') }}</span>
                                        </li>
                                        <li><i class="fa fa-signal text-warning"></i><span>Pemula</span></li>
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
                        </div>
                    </div>
                @empty
                    <h1>Belum Ada Pelatihan</h1>
                @endforelse
            </div>

        </div>
    </section>
    <!-- ============================ Course Detail ================================== -->

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
