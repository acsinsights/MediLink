@extends('frontend.layouts.app')
@section('title', 'Blogs')
@section('page')

    <!-- BREADCRUMB
                                                                ============================================= -->
    <div id="breadcrumb" class="division">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" breadcrumb-holder">

                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb"style="justify-content:center;">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Blogs</li>
                            </ol>
                        </nav>

                        <!-- Title -->
                        <h4 class="h4-sm steelblue-color" style="text-align:center;">Our Blogs</h4>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BREADCRUMB -->


    <!-- BLOG PAGE CONTENT
                                                                    ============================================= -->
    <div id="blog-page" class="wide-100 blog-page-section division">
        <div class="container">
            <div class="row">
                <!-- BLOG POSTS HOLDER -->
                <div class="col-lg-8">
                    <div class="posts-holder pr-30">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-lg-6 col-12">

                                    <!-- BLOG POST #1 -->
                                    <a href="{{ route('frontend.blog.show', $post->slug) }}" class="d-block blog-post">

                                        {{-- {{ dd($post) }} --}}
                                        <!-- BLOG POST IMAGE -->
                                        <div class="blog-post-img">
                                            <img class="img-fluid"
                                                src="{{ $post->featured_image ? asset($post->featured_image) : url('frontend/images/blog/post-4-img.jpg') }}"
                                                alt="blog-post-image">

                                        </div>

                                        <!-- BLOG POST TITLE -->
                                        <div class="blog-post-txt">

                                            <!-- Post Title -->
                                            <h5 class="h6-xl steelblue-color">

                                                {{ $post->title }}

                                            </h5>

                                            <span class="d-flex justify-content-between">
                                                {{ $post->created_at->format('M d, Y') }}
                                                <span>
                                                    <i class="fas fa-user"></i> {{ $post->author->name }}
                                                </span>
                                            </span>

                                            <!-- Post Text -->
                                            <p>
                                                {{ $post->excerpt }}
                                            </p>

                                        </div>

                                    </a> <!-- END BLOG POST #1 -->
                                </div>
                            @endforeach
                        </div>
                        <!-- BLOG PAGE PAGINATION -->
                        <div class="blog-page-pagination b-top mt-2 pt-2 d-flex justify-content-center">
                            {{ $posts->links() }}

                        </div>
                    </div>
                </div> <!-- END BLOG POSTS HOLDER -->



                <!-- SIDEBAR -->
                <aside id="sidebar" class="col-lg-4">



                    <!-- TAGS CLOUD -->
                    <div class="tags-cloud sidebar-div mb-50">

                        <!-- Title -->
                        <h5 class="h5-sm steelblue-color">All Category</h5>

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


                </aside> <!-- END SIDEBAR -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BLOG PAGE CONTENT -->



@endsection
