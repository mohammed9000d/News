@extends('front.master')

@section('title', 'Home')

@section('content')
    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
{{--                <div class="carousel-item active" data-bs-interval="3000">--}}
{{--                    <div class="bg-home-75vh d-flex align-items-center" style="background: url('{{ asset('front/images/blog/bg1.jpg') }}') center center;">--}}
{{--                        <div class="bg-overlay"></div>--}}
{{--                        <div class="container">--}}
{{--                            <div class="row mt-5 justify-content-center">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="title-heading text-center">--}}
{{--                                        <h2 class="text-white title-dark mb-3">Weekend Travel</h2>--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li class="list-inline-item small user text-white-50 me-2"><i class="uil uil-user text-white title-dark"></i> Calvin Carlo</li>--}}
{{--                                            <li class="list-inline-item small date text-white-50"><i class="uil uil-calendar-alt text-white title-dark"></i> 13th August, 2019</li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="para-desc mx-auto text-white-50 mb-0">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
{{--                                        <div class="mt-4">--}}
{{--                                            <a href="javascript:void(0)" class="btn btn-primary">Read More </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}
{{--                            </div><!--end row-->--}}
{{--                        </div>--}}
{{--                    </div><!--end slide-->--}}
{{--                </div>--}}

{{--                <div class="carousel-item" data-bs-interval="3000">--}}
{{--                    <div class="bg-home-75vh d-flex align-items-center" style="background: url('{{ asset('front/images/blog/bg2.jpg') }}') center center;">--}}
{{--                        <div class="bg-overlay"></div>--}}
{{--                        <div class="container">--}}
{{--                            <div class="row mt-5 justify-content-center">--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="title-heading text-center">--}}
{{--                                        <h2 class="text-white title-dark mb-3">Business Meeting</h2>--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li class="list-inline-item small user text-white-50 me-2"><i class="uil uil-user text-white title-dark"></i> Calvin Carlo</li>--}}
{{--                                            <li class="list-inline-item small date text-white-50"><i class="uil uil-calendar-alt text-white title-dark"></i> 13th August, 2019</li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="para-desc mx-auto text-white-50 mb-0">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>--}}
{{--                                        <div class="mt-4">--}}
{{--                                            <a href="javascript:void(0)" class="btn btn-primary">Read More </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}
{{--                            </div><!--end row-->--}}
{{--                        </div>--}}
{{--                    </div><!--end slide-->--}}
{{--                </div>--}}
            @foreach($recent_posts as $post)

{{--                {{dd($recent_posts[0])}}--}}
                <div class="carousel-item {{$post == $recent_posts[0] ? 'active' : ''}}" data-bs-interval="3000">
                    <div class="bg-home-75vh d-flex align-items-center" style="background: url('{{ $post->image_url }}') center center/cover no-repeat;">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row mt-5 justify-content-center">
                                <div class="col-12">
                                    <div class="title-heading text-center">
                                        <h2 class="text-white title-dark mb-3">{{ $post->name }}</h2>
                                        <ul class="list-unstyled">
                                            <li class="list-inline-item small user text-white-50 me-2"><i class="uil uil-user text-white title-dark"></i>{{ $post->category->name }}</li>
                                            <li class="list-inline-item small date text-white-50"><i class="uil uil-calendar-alt text-white title-dark"></i>{{ $post->created_at }}</li>
                                        </ul>
                                        <p class="para-desc mx-auto text-white-50 mb-0">{{ $post->short_description }}</p>
                                        <div class="mt-4">
                                            <a href="{{ route('post-details', $post->id) }}" class="btn btn-primary">Read More </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end slide-->
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-absolute blog-search">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="text-center subcribe-form">
                                    <form style="max-width: 800px;" action="{{ route('search') }}" method="GET">
                                        @csrf
                                        <input type="text" id="course" name="search" class="rounded-pill shadow-md bg-white" placeholder="Search for a post...">
                                        <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                    </form><!--end form-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end div-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-4 mt-lg-0">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h4 class="mb-4">Popular post</h4>
                        <p class="text-muted mb-0 para-desc">Here you will find the most interactive posts on the platform.</p>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0">
                    <div class="text-center text-md-end">
                        <a href="{{ route('popular-posts') }}" class="btn btn-soft-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($popular_posts as $post)
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ $post->image_url }}" class="card-img-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{ route('post-details', $post->id) }}" class="card-title title text-dark">{{ $post->name }}</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>{{ $post->comments_count }}</a></li>
                                </ul>
                                <a href="{{ route('post-details', $post->id) }}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i>{{ $post->category->name }}</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i>{{ $post->created_at }}</small>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h4 class="mb-4">Recent Post</h4>
                        <p class="text-muted mb-0 para-desc">Here you can find the latest posts on the platform</p>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0">
                    <div class="text-center text-md-end">
                        <a href="{{ route('recent-posts') }}" class="btn btn-soft-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($recent_posts as $post)
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ $post->image_url }}" class="card-img-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{ route('post-details', $post->id) }}" class="card-title title text-dark">{{ $post->name }}</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>{{ $post->comments_count }}</a></li>
                                </ul>
                                <a href="{{ route('post-details', $post->id) }}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i>{{ $post->category->name }}</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i>{{ $post->created_at }}</small>
                        </div>
                    </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->

        <!-- Cta start -->
        <div class="container-fluid mt-100 mt-60">
            <div class="rounded-md shadow-md py-5 position-relative" style="background: url('{{ asset('front/images/3.jpg') }}') center center;">
                <div class="bg-overlay rounded-md"></div>
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2 class="fw-bold text-white title-dark mb-4 pb-2">People are podcasting <br> all over the world</h2>
                                <a href="javascript:void(0)" class="btn btn-primary">Read More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end slide-->
        </div><!--end container-->
        <!-- Cta End -->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-md-8">
                    <div class="section-title text-center text-md-start">
                        <h4 class="mb-4">All News or Blog Post</h4>
                        <p class="text-muted mb-0 para-desc">Here you can find all the posts published today</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach($posts_today as $post)
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card blog rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="{{ $post->image_url }}" class="card-img-top" alt="...">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="{{ route('post-details', $post->id) }}" class="card-title title text-dark">{{ $post->name }}</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>{{ $post->comments_count }}</a></li>
                                    </ul>
                                    <a href="{{ route('post-details', $post->id) }}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="uil uil-user"></i>{{ $post->category->name }}</small>
                                <small class="text-light date"><i class="uil uil-calendar-alt"></i>{{ $post->created_at }}</small>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach
                <div class="col-12 mt-4 pt-2">
                    <div class="text-center">
                        <a href="{{ route('posts-today') }}" class="btn btn-primary">See More <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
