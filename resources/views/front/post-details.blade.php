@extends('front.master')

@section('title', 'Post Details')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h2> {{ $post->name }} </h2>
                        <ul class="list-unstyled mt-4">
                            <li class="list-inline-item h6 user text-muted me-2"><i class="mdi mdi-account"></i>{{ $post->category->name }}</li>
                            <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i>{{ $post->created_at }}</li>
                        </ul>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Posts</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Detail</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Blog STart -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- BLog Start -->
                <div class="col-lg-8 col-md-6">
                    <div class="card blog blog-detail border-0 shadow rounded">
                        <img src="{{ $post->image_url }}" class="img-fluid rounded-top" alt="">
                        <div class="card-body content">
                            <h6><i class="mdi mdi-tag text-primary me-1"></i><a href="javscript:void(0)" class="text-primary">Software</a>, <a href="javscript:void(0)" class="text-primary">Application</a></h6>
{{--                            <p class="text-muted mt-3">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. </p>--}}
{{--                            <blockquote class="blockquote mt-3 p-3">--}}
{{--                                <p class="text-muted mb-0 fst-italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>--}}
{{--                            </blockquote>--}}
                            <p class="text-muted">{{ $post->full_description }}</p>
                            <div class="post-meta mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Comments :</h5>

                            <ul class="media-list list-unstyled mb-0">
                                @foreach($comments as $comment)
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">{{ $comment->user->name }}</a></h6>
                                                <small class="text-muted">{{ $comment->created_at }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" {{ $comment->body }} "</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Leave A Comment :</h5>

                            @livewire('front.comment-livewire', ['post' => $post])
                        </div>
                    </div>

{{--                    <div class="card shadow rounded border-0 mt-4">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title mb-0">Related Posts :</h5>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 mt-4 pt-2">--}}
{{--                                    <div class="card blog rounded border-0 shadow">--}}
{{--                                        <div class="position-relative">--}}
{{--                                            <img src="images/blog/01.jpg" class="card-img-top rounded-top" alt="...">--}}
{{--                                            <div class="overlay rounded-top bg-dark"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body content">--}}
{{--                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">Design your apps in your own way</a></h5>--}}
{{--                                            <div class="post-meta d-flex justify-content-between mt-3">--}}
{{--                                                <ul class="list-unstyled mb-0">--}}
{{--                                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>--}}
{{--                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="author">--}}
{{--                                            <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>--}}
{{--                                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> 13th August, 2019</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-lg-6 mt-4 pt-2">--}}
{{--                                    <div class="card blog rounded border-0 shadow">--}}
{{--                                        <div class="position-relative">--}}
{{--                                            <img src="images/blog/02.jpg" class="card-img-top rounded-top" alt="...">--}}
{{--                                            <div class="overlay rounded-top bg-dark"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-body content">--}}
{{--                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">How apps is changing the IT world</a></h5>--}}
{{--                                            <div class="post-meta d-flex justify-content-between mt-3">--}}
{{--                                                <ul class="list-unstyled mb-0">--}}
{{--                                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>--}}
{{--                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>--}}
{{--                                                </ul>--}}
{{--                                                <a href="page-blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="author">--}}
{{--                                            <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>--}}
{{--                                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> 13th August, 2019</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}
{{--                            </div><!--end row-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <!-- BLog End -->

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
                </div><!--end col-->
                <!-- END SIDEBAR -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        window.addEventListener('toast', event => {
            toastr[event.detail.type](event.detail.message, event.detail.title ?? '')
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
            }
        })
    </script>
@endsection
