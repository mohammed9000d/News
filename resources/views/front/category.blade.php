@extends('front.master')

@section('title', 'Category')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> {{ $title ?? $category->name }} </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $title ?? $category->name }}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!--Blog Lists Start-->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- Blog Post Start -->
                <div class="col-lg-8 col-12">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-12 mb-4 pb-2">
                                <div class="card blog rounded border-0 shadow overflow-hidden">
                                    <div class="row align-items-center g-0">
                                        <div class="col-md-6">
                                            <img src="{{ $post->image_url }}" class="img-fluid" alt="">
                                            <div class="overlay bg-dark"></div>
                                            <div class="author">
                                                <small class="text-light user d-block"><i class="uil uil-user"></i>{{ $post->category->name }}</small>
                                                <small class="text-light date"><i class="uil uil-calendar-alt"></i>{{ $post->name }}</small>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="card-body content">
                                                <h5><a href="{{ route('post-details', $post->id) }}" class="card-title title text-dark">{{ $post->name }}</a></h5>
                                                <p class="text-muted mb-0">{{ $post->short_description }}</p>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>{{ $post->comments_count }}</a></li>
                                                    </ul>
                                                    <a href="{{ route('post-details', $post->id) }}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end row-->
                                </div><!--end blog post-->
                            </div><!--end col-->
                        @endforeach
                            <div class="col-12">
                                <ul class="pagination justify-content-center mb-0">
                                    {{ $posts->links() }}
                                </ul>
                            </div>
                        <!-- PAGINATION END -->
                    </div><!--end row-->
                </div><!--end col-->
                <!-- Blog Post End -->

                <!-- START SIDEBAR -->
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <!-- SEARCH -->
                            <div class="widget">
                                <form role="search" method="get">
                                    <div class="input-group mb-3 border rounded">
                                        <input type="text" id="s" name="s" class="form-control border-0" placeholder="Search Keywords...">
                                        <button type="submit" class="input-group-text bg-transparent border-0" id="searchsubmit"><i class="uil uil-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- SEARCH -->

                            <!-- Categories -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">Categories</h5>
                                <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a> <span class="float-end">{{ $category->posts->count() }}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- Categories -->

                            <!-- RECENT POST -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">Recent Post</h5>
                                <div class="mt-4">
                                    @foreach($recent_posts as $post)
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-start"> <a href="{{ route('post-details', $post->id) }}"> <img alt="img" src="{{ $post->image_url }}" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-start"><a href="{{ route('post-details', $post->id) }}">{{ $post->name }}</a><span class="text-muted mt-2">{{ $post->created_at }}</span></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- RECENT POST -->

                            <!-- TAG CLOUDS -->
                        {{--                            <div class="widget mb-4 pb-2">--}}
                        {{--                                <h5 class="widget-title">Tags Cloud</h5>--}}
                        {{--                                <div class="tagcloud mt-4">--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Business</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Finance</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Marketing</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Fashion</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Bride</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Lifestyle</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Travel</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Beauty</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Video</a>--}}
                        {{--                                    <a href="jvascript:void(0)" class="rounded">Audio</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        <!-- TAG CLOUDS -->

                            <!-- SOCIAL -->
                            <div class="widget">
                                <h5 class="widget-title">Follow us</h5>
                                <ul class="list-unstyled social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <!-- SOCIAL -->
                        </div>
                    </div>
                </div>
                <!-- END SIDEBAR -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section -->
    <!--Blog Lists End-->
@endsection
