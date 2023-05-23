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
    <div class="hero_banner image-cover image_bottom h6_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="simple-search-wrap text-left">
                        <div class="hero_search-2">
                            <h1 class="banner_title mb-4">The Best<br>e-Learning Cources For<br><span class="light">Better
                                    Future</span></h1>
                            <p class="font-lg mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore.</p>
                            <div class="inline_btn">
                                <a href="explore-category.html" class="btn theme-bg text-white">Get Started</a>
                                <a href="explore-category.html" class="btn light_btn">Become An Instructor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="side_block extream_img">
                        <div class="list_crs_img">
                            <img src="{{ asset('front/img/img-1.png') }}" class="img-fluid elsio cirl animate-fl-y"
                                alt="" />
                            <img src="{{ asset('front/img/img-3.png') }}" class="img-fluid elsio arrow animate-fl-x"
                                alt="" />
                            <img src="{{ asset('front/img/img-2.png') }}" class="img-fluid elsio moon animate-fl-x"
                                alt="" />
                        </div>
                        <img src="{{ asset('front/img/st-3.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ================================ Tag Award ================================ -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="crp_box fl_color ovr_top">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="dro_140">
                                    <div class="dro_141 de"><i class="fa fa-journal-whills"></i></div>
                                    <div class="dro_142">
                                        <h6>200+ Cources</h6>
                                        <p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="dro_140">
                                    <div class="dro_141 de"><i class="fa fa-business-time"></i></div>
                                    <div class="dro_142">
                                        <h6>Lifetime Access</h6>
                                        <p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="dro_140">
                                    <div class="dro_141 de"><i class="fa fa-user-shield"></i></div>
                                    <div class="dro_142">
                                        <h6>800k+ Enrolled</h6>
                                        <p>Duis aute irure dolor in voluptate velit esse cillum labore .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ================================ Tag Award ================================ -->

    <!-- ============================ Cources Start ================================== -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>explore Featured <span class="theme-cl">Cources</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
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
                        <h2>Explore Top <span class="theme-cl">Categories</span></h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores</p>
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
                        <h2>Latest News & <span class="theme-cl">Articles</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="blg_grid_box">
                        <div class="blg_grid_thumb">
                            <a href="blog-detail.html"><img src="https://via.placeholder.com/1200x800" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="blg_grid_caption">
                            <div class="blg_tag dark"><span>Marketing</span></div>
                            <div class="blg_title">
                                <h4><a href="blog-detail.html">How To Improove Digital Marketing for Fast SEO</a>
                                </h4>
                            </div>
                            <div class="blg_desc">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum</p>
                            </div>
                            <div class="blg_more"><a href="blog-detail.html">Reading Continues</a></div>
                        </div>
                    </div>
                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="blg_grid_box">
                        <div class="blg_grid_thumb">
                            <a href="blog-detail.html"><img src="https://via.placeholder.com/1200x800" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="blg_grid_caption">
                            <div class="blg_tag dark"><span>Marketing</span></div>
                            <div class="blg_title">
                                <h4><a href="blog-detail.html">How To Improove Digital Marketing for Fast SEO</a>
                                </h4>
                            </div>
                            <div class="blg_desc">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum</p>
                            </div>
                            <div class="blg_more"><a href="blog-detail.html">Reading Continues</a></div>
                        </div>
                    </div>
                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="blg_grid_box">
                        <div class="blg_grid_thumb">
                            <a href="blog-detail.html"><img src="https://via.placeholder.com/1200x800" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="blg_grid_caption">
                            <div class="blg_tag dark"><span>Marketing</span></div>
                            <div class="blg_title">
                                <h4><a href="blog-detail.html">How To Improove Digital Marketing for Fast SEO</a>
                                </h4>
                            </div>
                            <div class="blg_desc">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum</p>
                            </div>
                            <div class="blg_more"><a href="blog-detail.html">Reading Continues</a></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ article End ================================== -->

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
