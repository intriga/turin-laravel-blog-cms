@extends('frontend.layouts.app')

@section('content')
    
    <!-- // header -->
    @include('frontend.includes.header')

    <!-- // banner -->
    @include('frontend.includes.banner', ['postsSlider' => $postsSlider])
    
    
    <div class="single-wrapper main-post-area-wrapper">
        <div class="single-inner">
            <div class="container">
                <div class="search-page">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                            
                            <div class="main-post-area-holder">
                            @foreach ($posts as $post)
                                <article class="post-details-holder layout-two-post-details-holder wow  fadeInUp">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                            <div class="post-image">
                                                <img src="{{ asset($post->image) }}" alt="....">
                                            </div>
                                            <!-- // post image -->
                                        </div>
                                        <!-- // col -->
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">

                                            <div class="post-meta-category">
                                                <p><a href="{{ url('/category/'.$post->category_slug) }}">{{ $post->category_title }}</a></p>
                                            </div>

                                            <div class="post-title">
                                                <h2><a href="{{ url('/post/'.$post->slug) }}">{{ $post->title }}</a></h2>
                                            </div>
                                            
                                        
                                            <div class="post-meta-posted-date">
                                                <p><a href="#">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</a></p>
                                            </div>

                                            <div class="post-share">
                                                <div class="share"></div>
                                            </div>
                                            
                                        </div>
                                        <!-- // col -->
                                    </div>
                                    <!-- row -->
                                </article>
                                <!-- // end of article -->
                                @endforeach
                                {{ $posts->links('vendor.pagination.bootstrap-4') }}                                                         

                            </div><!-- // main-post-area-holder -->
                        </div>
                        <!-- // col -->

                        <!-- // aside -->
                        @include('frontend.includes.aside')
                        <!-- // col 4 -->
                    </div>
                    <!-- // row that divides left and right sidebar -->
                </div>
                <!-- // search-page -->
            </div>
            <!-- // container -->
        </div>
        <!-- // single_inner -->
    </div>
    <!-- // single-wrapper --><div id="instafeed" class="instafeed owl-carousel feed-carousel">

    </div>

    <!-- // footer -->
    @include('frontend.includes.footer')

@endsection