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
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="hero_banner image-cover image_bottom"
        style="background:#f7f8f9 url({{ asset('front/img/banner-1.png') }}) no-repeat;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 col-sm-12">
                    <div class="simple-search-wrap">
                        <div class="hero_search-2 text-center">
                            <h1 class="banner_title mb-4">Balai Diklat Industri Makassar</h1>
                            <p class="font-lg mb-4">Adanya revolusi industri 4.0 yang terjadi secara global akan sangat
                                mempengaruhi industri di Indonesia oleh karena itu Kementerian Perindustrian merespon dengan
                                melakukan perubahan pada organisasi. Terkait Balai Diklat Industri diteribitkan Peraturan
                                Menteri Perindustrian Nomor 2 Tahun 2022 yang menerapkan pemangkasan birokasi sehingga Balai
                                Diklat Industri Makassar dapat bergerak dengan lebih efektif dan efisien serta memperluas
                                spesialisasi Balai Diklat Industri Makassar menjadi bidang agro, pangan, dan fitofarmaka
                                dengan spesialis penunjang desain kemasan industri.</p>
                                {{-- <p>Balai Diklat Industri Makassar - Kementerian Perindustrian RI : Terlatih, Kompeten, Siap Kerja</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Cources Start ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2><span class="theme-cl">Pelatihan</span> Terbaru</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                @forelse ($pelatihans as $pelatihan)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="crs_grid">
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
                                        <div class="crs_inrolled"><strong>8,350</strong>Pendaftar</div>
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
                                        <li><i class="fa fa-signal text-warning"></i><span>Pemula</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb"><a href="instructor-detail.html"><img
                                                        src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                                        alt="" /></a></div>
                                            <div class="crs_tutor_name"><a href="instructor-detail.html">BDI Makassar</a>
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

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 mt-2">
                    <div class="text-center"><a href="{{ route('user.pelatihan') }}"
                            class="btn btn-md theme-bg-light theme-cl">Lihat Selengkapnya</a></div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Cources End ================================== -->

    <!-- ============================ Categories Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2><span class="theme-cl">Kategori</span> Teratas</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse ($categories as $category)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="edu_cat_2 cat-1">
                            <div class="edu_cat_icons">
                                <a class="pic-main" href="#"><img src="/images/kategori/{{ $category->icon }}"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="edu_cat_data">
                                <h4 class="title"><a href="#">{{ $category->nama }}</a></h4>
                                <ul class="meta">
                                    <li class="video"><i class="ti-video-clapper"></i>{{ $category->pelatihan_count }}
                                        Pelatihan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Belum Ada Kategori</h3>
                @endforelse
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Categories End ================================== -->

    <!-- ============================ article Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2><span class="theme-cl">Blog</span> Terakhir</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single blog Grid -->
                @forelse ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb">
                                <a href="blog-detail.html"><img src="/images/blog/{{ $blog->image }}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="blg_grid_caption">
                                <div class="blg_tag dark"><span>{{ $blog->category->nama }}</span></div>
                                <div class="blg_title">
                                    <h4><a href="blog-detail.html">{{ $blog->title }}</a>
                                    </h4>
                                </div>
                                <div class="blg_desc">
                                    <p>{!! Str::words($blog->description, 10, '....') !!}
                                    </p>
                                </div>
                                <div class="blg_more"><a href="blog-detail.html">Lihat Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Belum ada postingan</h3>
                @endforelse

            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 mt-2">
                    <div class="text-center"><a href="{{ route('user.pelatihan') }}"
                            class="btn btn-md theme-bg-light theme-cl">Lihat Selengkapnya</a></div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ article End ================================== -->
@endsection
