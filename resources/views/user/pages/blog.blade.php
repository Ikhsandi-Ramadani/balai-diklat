@extends('user.base')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title bg-cover" style="background:url(https://via.placeholder.com/1920x1200)no-repeat;"
        data-overlay="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title text-light">Latest News</h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="#" class="text-light">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ article Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>Latest News & <span class="theme-cl">Articles</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Item -->
                @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb">
                                <a href="{{ route('user.detail-blog', $blog->slug) }}"><img
                                        src="/images/blog/{{ $blog->image }}" class="img-fluid" alt="" /></a>
                            </div>
                            <div class="blg_grid_caption">
                                <div class="blg_tag"><span>{{ $blog->category->nama }}</span></div>
                                <div class="blg_title">
                                    <h4><a href="{{ route('user.detail-blog', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                </div>
                                <div class="blg_desc">
                                    <p>{!! Str::words($blog->description, 10, '....') !!}</p>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div class="crs_flex">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb">
                                                <a href="#">
                                                    <img src="https://via.placeholder.com/500x500" class="img-fluid circle"
                                                        alt="" />
                                                </a>
                                            </div>
                                            <div class="crs_tutor_name">Admin
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul>
                                                <li>
                                                    <div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div>
                                                    <div class="elsio_tx">
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('D MMMM Y') }}
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Belum ada postingan</h3>
                @endforelse

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ article End ================================== -->
@endsection
