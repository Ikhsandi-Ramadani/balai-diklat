@extends('user.base')

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
                        <h2>Explore Featured <span class="theme-cl">Cources</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="https://via.placeholder.com/1200x800"
                                    class="img-fluid rounded" alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Development</span>
                                <span class="est st_2">PHP</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">Advance PHP knowledge with laravel to make smart web</h4>
                                <span class="crs_auth"><i>By</i> Adam Wilson</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">99</span></h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="https://via.placeholder.com/1200x800"
                                    class="img-fluid rounded" alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Insurence</span>
                                <span class="est st_2">Banking</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">The complete accounting & bank financial course 2021</h4>
                                <span class="crs_auth"><i>By</i> Mike Hussey</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">139</span></h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="https://via.placeholder.com/1200x800"
                                    class="img-fluid rounded" alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Software</span>
                                <span class="est st_2">Technology</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">The complete business plan course includes 50 templates</h4>
                                <span class="crs_auth"><i>By</i> Litha Joshi</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">77.99</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="crs_grid_list">

                        <div class="crs_grid_list_thumb">
                            <a href="course-detail.html"><img src="https://via.placeholder.com/1200x800"
                                    class="img-fluid rounded" alt=""></a>
                        </div>

                        <div class="crs_grid_list_caption">
                            <div class="crs_lt_101">
                                <span class="est st_1">Business</span>
                                <span class="est st_2">Finance</span>
                            </div>
                            <div class="crs_lt_102">
                                <h4 class="crs_tit">Full web designing course with 20 web template designing</h4>
                                <span class="crs_auth"><i>By</i> Adam Wilson</span>
                            </div>
                            <div class="crs_lt_103">
                                <div class="crs_info_detail">
                                    <ul>
                                        <li><i class="fa fa-video"></i><span>24 Videos</span></li>
                                        <li><i class="fa fa-user"></i><span>10k User</span></li>
                                        <li><i class="fa fa-eye"></i><span>92k Views</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="crs_flex">
                                <div class="crs_fl_first">
                                    <div class="crs_price">
                                        <h2><span class="currency">$</span><span class="theme-cl">129</span></h2>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="crs_linkview"><a href="course-detail.html"
                                            class="btn btn_view_detail theme-bg text-light">Enroll Now</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 mt-2">
                    <div class="text-center"><a href="grid-layout-with-sidebar.html"
                            class="btn btn-md theme-bg-light theme-cl">Explore More Cources</a></div>
                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Cources End ================================== -->

    <!-- ============================ Categories Start ================================== -->
    <section class="min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Select Your <span class="theme-cl">Categories</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-code"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Development</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-window-restore"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Web Designing</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-leaf"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Lifestyle</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-heartbeat"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Health & Fitness</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-landmark"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Gov. Exams</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-photo-video"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Photography</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-stamp"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Finance & Accounting</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="cates_crs_wrip">
                        <div class="crs_trios">
                            <div class="crs_cate_icon"><i class="fa fa-school"></i></div>
                            <div class="crs_cate_link"><a href="grid-layout-with-sidebar.html">View Cources</a>
                            </div>
                        </div>
                        <div class="crs_capt_cat">
                            <h4>Office Productivity</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Categories End ================================== -->

    <!-- ============================ Top Instructor Start ================================== -->
    <section>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 text-center">
                    <div class="sec-heading center mb-4">
                        <h2>Our Top <span class="theme-cl">Instructors</span></h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="tutor-slide">

                        <!-- Single Item -->
                        <div class="lios_item">
                            <div class="crs_trt_grid theme-light shadow_none">
                                <div class="crs_trt_thumb">
                                    <a href="instructor-detail.html" class="crs_trt_thum_link"><img
                                            src="https://via.placeholder.com/700x550" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="crs_trt_caption large">
                                    <div class="instructor_tag dark"><span>Sanskrit Teacher</span></div>
                                    <div class="instructor_title">
                                        <h4><a href="instructor-detail.html">Luella J. Robles</a></h4>
                                    </div>
                                    <div class="trt_rate_inf">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star-half filled"></i>
                                        <span class="alt_rates">(244 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="lios_item">
                            <div class="crs_trt_grid theme-light shadow_none">
                                <div class="crs_trt_thumb">
                                    <a href="instructor-detail.html" class="crs_trt_thum_link"><img
                                            src="https://via.placeholder.com/700x550" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="crs_trt_caption large">
                                    <div class="instructor_tag dark"><span>Math Teacher</span></div>
                                    <div class="instructor_title">
                                        <h4><a href="instructor-detail.html">David E. Lampkin</a></h4>
                                    </div>
                                    <div class="trt_rate_inf">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star-half filled"></i>
                                        <span class="alt_rates">(244 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="lios_item">
                            <div class="crs_trt_grid theme-light shadow_none">
                                <div class="crs_trt_thumb">
                                    <a href="instructor-detail.html" class="crs_trt_thum_link"><img
                                            src="https://via.placeholder.com/700x550" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="crs_trt_caption large">
                                    <div class="instructor_tag dark"><span>History Teacher</span></div>
                                    <div class="instructor_title">
                                        <h4><a href="instructor-detail.html">Michael B. Maxwell</a></h4>
                                    </div>
                                    <div class="trt_rate_inf">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star-half filled"></i>
                                        <span class="alt_rates">(244 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="lios_item">
                            <div class="crs_trt_grid theme-light shadow_none">
                                <div class="crs_trt_thumb">
                                    <a href="instructor-detail.html" class="crs_trt_thum_link"><img
                                            src="https://via.placeholder.com/700x550" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="crs_trt_caption large">
                                    <div class="instructor_tag dark"><span>Physics Teacher</span></div>
                                    <div class="instructor_title">
                                        <h4><a href="instructor-detail.html">Daniel D. Couse</a></h4>
                                    </div>
                                    <div class="trt_rate_inf">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star-half filled"></i>
                                        <span class="alt_rates">(244 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="lios_item">
                            <div class="crs_trt_grid theme-light shadow_none">
                                <div class="crs_trt_thumb">
                                    <a href="instructor-detail.html" class="crs_trt_thum_link"><img
                                            src="https://via.placeholder.com/700x550" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="crs_trt_caption large">
                                    <div class="instructor_tag dark"><span>PHP Developer</span></div>
                                    <div class="instructor_title">
                                        <h4><a href="instructor-detail.html">Linda R. Gibson</a></h4>
                                    </div>
                                    <div class="trt_rate_inf">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star-half filled"></i>
                                        <span class="alt_rates">(244 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="lios_item">
                            <div class="crs_trt_grid theme-light shadow_none">
                                <div class="crs_trt_thumb">
                                    <a href="instructor-detail.html" class="crs_trt_thum_link"><img
                                            src="https://via.placeholder.com/700x550" class="img-fluid"
                                            alt=""></a>
                                </div>
                                <div class="crs_trt_caption large">
                                    <div class="instructor_tag dark"><span>Chemistry Expert</span></div>
                                    <div class="instructor_title">
                                        <h4><a href="instructor-detail.html">Douglas M. Mikel</a></h4>
                                    </div>
                                    <div class="trt_rate_inf">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star-half filled"></i>
                                        <span class="alt_rates">(244 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Top Instructor End ================================== -->

    <!-- ============================ How It Works Start ================================== -->
    <section class="min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>How It <span class="theme-cl">Works?</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">

                <!-- Single Location -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="wrk_grid">
                        <div class="wrk_grid_ico">
                            <i class="fa fa-search-location"></i>
                        </div>
                        <div class="wrk_caption">
                            <h4>Find Cources</h4>
                            <p>We have helped over 3,400 new students to get into the most popular tech teams.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Location -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="wrk_grid active">
                        <div class="wrk_grid_ico">
                            <i class="fa fa-calendar-week"></i>
                        </div>
                        <div class="wrk_caption">
                            <h4>Book Your Seat</h4>
                            <p>We have helped over 3,400 new students to get into the most popular tech teams.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Location -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="wrk_grid">
                        <div class="wrk_grid_ico">
                            <i class="fa fa-award"></i>
                        </div>
                        <div class="wrk_caption">
                            <h4>Get Certificate</h4>
                            <p>We have helped over 3,400 new students to get into the most popular tech teams.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ How It Works End ================================== -->

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
