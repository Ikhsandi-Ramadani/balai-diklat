@extends('user.base')

@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">{{ $blog->title }}</h1>
                        <nav class="transparent">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active theme-cl" aria-current="page">Blog Detail</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Blog Detail Start ================================== -->
    <section class="gray">

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <!-- Blog Detail -->
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="article_detail_wrapss single_article_wrap format-standard">
                        <div class="article_body_wrap">

                            <div class="article_featured_image">
                                <img class="img-fluid" src="/images/blog/{{ $blog->image }}" alt="">
                            </div>

                            <div class="article_top_info">
                                <ul class="article_middle_info">
                                    <li><a href="#"><span class="icons"><i class="ti-user"></i></span>by Admin</a>
                                    </li>
                                </ul>
                            </div>
                            <h2 class="post-title">{{ $blog->title }}</h2>
                            {!! $blog->description !!}
                        </div>
                    </div>

                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <!-- Categories -->
                    <div class="single_widgets widget_category">
                        <h4 class="title">Categories</h4>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="#">{{ $category->nama }} <span>{{ $category->blog_count }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Trending Posts -->
                    <div class="single_widgets widget_thumb_post">
                        <h4 class="title">Latest Posts</h4>
                        <ul>
                            @foreach ($blogs as $blog)
                                <li>
                                    <span class="left">
                                        <img src="/images/blog/{{ $blog->image }}" alt="" class="">
                                    </span>
                                    <span class="right">
                                        <a class="feed-title"
                                            href="{{ route('user.detail-blog', $blog->slug) }}">{{ $blog->title }}</a>
                                        <span class="post-date"><i
                                                class="ti-calendar"></i>{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Blog Detail End ================================== -->

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
