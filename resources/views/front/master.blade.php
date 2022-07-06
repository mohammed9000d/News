
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landrick - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v3.2.0" />
    <!-- favicon -->
{{--    {{ asset('front/') }}--}}
    <link rel="shortcut icon" href="{{ asset('front/images/favicon.ico') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="{{ asset('front/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="{{ asset('front/css/tiny-slider.css') }}"/>
    <!-- Main Css -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{{ asset('front/css/colors/default.css') }}" rel="stylesheet" id="color-opt">
    <link href="{{  asset('admin/assets/plugins/global/plugins.bundle.css')  }}" rel="stylesheet" type="text/css" />
    @yield('style')
    @livewireStyles
</head>

<body>
<!-- Loader -->
<!-- <div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div> -->
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky bg-white">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="../../../../../../Users/97059/Desktop/New%20folder/HTML/index.html">
            <img src="{{ asset('front/images/logo-dark.png') }}" height="24" class="logo-light-mode" alt="">
            <img src="{{ asset('front/images/logo-light.png') }}" height="24" class="logo-dark-mode" alt="">
        </a>
{{--        <div class="buy-button">--}}
{{--            <a href="{{ route('login') }}" class="btn btn-primary">Login \ Sign Up</a>--}}
{{--        </div>--}}

        @if (Route::has('login'))
            <div class="buy-button">
                @auth
                    <a href="{{ route('logout') }}" class="btn btn-primary-outline">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Login \ Sign Up</a>
                @endauth
            </div>
        @endif
        <!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Categories</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        @foreach($categories as $category)
                            <li><a href="{{ route('category', $category->id) }}" class="sub-menu-item">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="sub-menu-item">Contact us</a></li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="{{ route('login') }}" target="_blank" class="btn btn-primary">Login \ Sign Up</a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->

@yield('content')

<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <a href="#" class="logo-footer">
                    <img src="{{ asset('front/images/logo-light.png') }}" height="24" alt="">
                </a>
                <p class="mt-4">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">Company</h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-aboutus.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-services.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-team.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Team</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-pricing.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/portfolio-modern-three.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Project</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-jobs.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Careers</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-blog-grid.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/auth-cover-login.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">Usefull Links</h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-terms.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/page-privacy.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/documentation.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Documentation</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/changelog.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Changelog</a></li>
                    <li><a href="../../../../../../Users/97059/Desktop/New%20folder/HTML/components.html" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">Newsletter</h5>
                <p class="mt-4">Sign up and receive the latest tips via email.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe mb-3">
                                <label class="form-label">Write your email <span class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="email" name="email" id="emailsubscribe" class="form-control ps-5 rounded" placeholder="Your email : " required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-grid">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="text-sm-start">
                    <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                </div>
            </div><!--end col-->

            <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled text-sm-end mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('front/images/payments/american-ex.png') }}" class="avatar avatar-ex-sm" title="American Express" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('front/images/payments/discover.png') }}" class="avatar avatar-ex-sm" title="Discover" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('front/images/payments/master-card.png') }}" class="avatar avatar-ex-sm" title="Master Card" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('front/images/payments/paypal.png') }}" class="avatar avatar-ex-sm" title="Paypal" alt=""></a></li>
                    <li class="list-inline-item"><a href="javascript:void(0)"><img src="{{ asset('front/images/payments/visa.png') }}" class="avatar avatar-ex-sm" title="Visa" alt=""></a></li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->



<!-- javascript -->
@include('sweetalert::alert')
@livewireScripts
<script src="{{  asset('admin/assets/plugins/global/plugins.bundle.js')  }}"></script>
{{--<script src="{{  asset('admin/assets/js/scripts.bundle.js')  }}"></script>--}}
<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<!-- SLIDER -->
<script src="{{ asset('front/js/tiny-slider.js') }} "></script>
<!-- Icons -->
<script src="{{ asset('front/js/feather.min.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('front/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="{{ asset('front/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
@yield('script')
</body>
</html>
