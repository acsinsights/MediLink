@extends('frontend.layouts.app')
@section('title', 'Single-blog')
@section('page')


    <!-- BREADCRUMB
                                                           ============================================= -->
    <div id="breadcrumb" class="division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-holder">

                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb"style="justify-content:center;">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('frontend.blog.index') }}">Our Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ $post->title }}
                                </li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h1 class="h4-sm mb-2 steelblue-color" style="text-align:center;">
                            {{ $post->title }}
                        </h1>
                        {{-- {{ dd($post) }} --}}

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BREADCRUMB -->


    <!-- BLOG PAGE CONTENT
                                                           ============================================= -->
    <div id="single-blog-page" class="wide-100 blog-page-section division">
        <div class="container">
            <div class="row">


                <!-- SINGLE POST -->
                <div class="col-lg-8">
                    <div class="single-blog-post pr-30">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-40">
                            <img class="img-fluid" src="{{ $post->featured_image ? asset($post->featured_image) : url('frontend/images/blog/post-4-img.jpg') }}"
                                alt="blog-post-image">
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="sblog-post-txt">

                            <!-- Post Title -->
                            <h4 class="h4-lg steelblue-color">
                                {{ $post->title }}
                            </h4>

                            <span class="d-flex justify-content-between">
                                {{ $post->created_at->format('M d, Y') }}
                                <span>
                                    <i class="fas fa-user"></i> {{ $post->author->name }}
                                </span>
                            </span>

                            <hr>

                            {!! $post->body !!}


                        </div> <!-- END BLOG POST TEXT -->



                    </div>
                </div> <!-- END SINGLE POST -->


                <!-- SIDEBAR -->
                <aside id="sidebar" class="col-lg-4">

                    <!-- TAGS CLOUD -->
                    <div class="tags-cloud sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-sm steelblue-color">Tags Cloud</h5>
                        <span class="badge">
                            <a href="{{ route('frontend.blog.index') }}">
                                All
                            </a>
                        </span>
                        @foreach ($tags as $tag)
                            <span class="badge">
                                <a href="{{ route('frontend.blog.index', ['tag' => $tag->slug]) }}">
                                    {{ $tag->name }}
                                </a>
                            </span>
                        @endforeach

                    </div>
                    <!-- POPULAR POSTS -->
                    <div class="popular-posts sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-sm steelblue-color">Recent Posts</h5>

                        <ul class="popular-posts">
                            @foreach ($recentPosts as $recentPost)
                                <!-- Popular post #1 -->
                                <li class="clearfix d-flex align-items-center">
                                    <a href="{{ route('frontend.blog.show', $recentPost->slug) }}" class="d-flex ">

                                        <!-- Image -->
                                        <img class="img-fluid" style="max-width:150px"
                                            src="{{ $recentPost->featured_image ? asset($recentPost->featured_image) : url('frontend/images/blog/post-4-img.jpg') }}"
                                            alt="blog-post-preview">

                                        <!-- Text -->
                                        <h6 class="post-summary">
                                            {{ $recentPost->title }}

                                        </h6>

                                </li>
                                </a>
                            @endforeach


                        </ul>

                    </div>
                </aside> <!-- END SIDEBAR -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BLOG PAGE CONTENT -->
@endsection
