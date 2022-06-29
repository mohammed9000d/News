<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{  asset('admin/assets/media/logos/favicon.ico')  }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{  asset('admin/assets/plugins/global/plugins.bundle.css')  }}" rel="stylesheet" type="text/css" />
    <link href="{{  asset('admin/assets/css/style.bundle.css')  }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @yield('style')
    @livewireStyles
    <style>
        @media (min-width: 992px){
            .header-fixed.toolbar-fixed .wrapper {
                padding-top: calc(-7px + var(--kt-toolbar-height));
            }
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="index.html">
                    <img alt="Logo" src="{{  asset('admin/assets/media/logos/logo-1.svg')  }}" class="h-15px logo" />
                </a>
                <!--end::Logo-->
                <!--begin::Aside toggler-->
                <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
                    <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside toggler-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <a class="menu-link active" href="index.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>
                        @can('view-any', App\Models\Category::class)
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('categories') }}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M12.9863016,8.83409843 C12.9953113,8.88805868 13,8.94348179 13,9 L13,11 L17,11 C18.1045695,11 19,11.8954305 19,13 L19,16 L5,16 L5,13 C5,11.8954305 5.8954305,11 7,11 L11,11 L11,9 C11,8.94348179 11.0046887,8.88805868 11.0136984,8.83409843 C9.84135601,8.42615464 9,7.31133193 9,6 C9,4.34314575 10.3431458,3 12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.31133193 14.158644,8.42615464 12.9863016,8.83409843 Z" fill="#000000"/>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="18" width="14" height="2" rx="1"/>
                                                    </g>
                                                </svg>
                                            </span>
										</span>
                                <span class="menu-title">Categories</span>
                            </a>
                        </div>
                        @endcan
                        @can('view-any', App\Models\Post::class)
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('posts') }}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M12.9863016,8.83409843 C12.9953113,8.88805868 13,8.94348179 13,9 L13,11 L17,11 C18.1045695,11 19,11.8954305 19,13 L19,16 L5,16 L5,13 C5,11.8954305 5.8954305,11 7,11 L11,11 L11,9 C11,8.94348179 11.0046887,8.88805868 11.0136984,8.83409843 C9.84135601,8.42615464 9,7.31133193 9,6 C9,4.34314575 10.3431458,3 12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.31133193 14.158644,8.42615464 12.9863016,8.83409843 Z" fill="#000000"/>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="18" width="14" height="2" rx="1"/>
                                                    </g>
                                                </svg>
                                            </span>
										</span>
                                <span class="menu-title">Posts</span>
                            </a>
                        </div>
                        @endcan
                        @can('view-any', App\Models\Role::class)
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('roles') }}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-primary svg-icon-2x">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M12.9863016,8.83409843 C12.9953113,8.88805868 13,8.94348179 13,9 L13,11 L17,11 C18.1045695,11 19,11.8954305 19,13 L19,16 L5,16 L5,13 C5,11.8954305 5.8954305,11 7,11 L11,11 L11,9 C11,8.94348179 11.0046887,8.88805868 11.0136984,8.83409843 C9.84135601,8.42615464 9,7.31133193 9,6 C9,4.34314575 10.3431458,3 12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.31133193 14.158644,8.42615464 12.9863016,8.83409843 Z" fill="#000000"/>
                                                        <rect fill="#000000" opacity="0.3" x="5" y="18" width="14" height="2" rx="1"/>
                                                    </g>
                                                </svg>
                                            </span>
										</span>
                                <span class="menu-title">Roles</span>
                            </a>
                        </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Aside mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                            <span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="index.html" class="d-lg-none">
                            <img alt="Logo" src="{{  asset('admin/assets/media/logos/logo-3.svg')  }}" class="h-30px" />
                        </a>
                    </div>
                    <!--end::Mobile logo-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">
                            <!--begin::Menu wrapper-->
                            <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                <!--begin::Menu-->
                                <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                    <div class="menu-item me-lg-1">
                                        <a class="menu-link active py-3" href="index.html">
                                            <span class="menu-title">Dashboard</span>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Navbar-->
                        <!--begin::Topbar-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::Toolbar wrapper-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Activities-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3">
                                    <!--begin::Drawer toggle-->
                                    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                                        <!--begin::Svg Icon | path: icons/duotone/Media/Equalizer.svg-->
                                        <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
															<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
															<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
															<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
														</g>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Drawer toggle-->
                                </div>
                                <!--end::Activities-->
                                <!--begin::Quick links-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3">
                                    <!--begin::Menu wrapper-->
                                    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                        <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks.svg-->
                                        <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
															<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
														</g>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Quick links-->
                                <!--begin::Chat-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3">
                                    <!--begin::Menu wrapper-->
                                    <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" id="kt_drawer_chat_toggle">
                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
                                        <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
														<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Chat-->
                                <!--begin::Notifications-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3">
                                    <!--begin::Menu- wrapper-->
                                    <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                        <!--begin::Svg Icon | path: icons/duotone/Code/Compiling.svg-->
                                        <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::Notifications-->
                                <!--begin::User-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                        <img src="{{  asset('admin/assets/media/avatars/150-26.jpg')  }}" alt="metronic" />
                                    </div>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="{{  asset('admin/assets/media/avatars/150-26.jpg')  }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="pages/projects/list.html" class="menu-link px-5">
                                                <span class="menu-text">My Projects</span>
                                                <span class="menu-badge">
															<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
														</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
                                            <a href="#" class="menu-link px-5">
                                                <span class="menu-title">My Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/referrals.html" class="menu-link px-5">Referrals</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/billing.html" class="menu-link px-5">Billing</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/statements.html" class="menu-link px-5">Payments</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                            <span class="form-check-label text-muted fs-7">Notifications</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
                                            <a href="#" class="menu-link px-5">
														<span class="menu-title position-relative">Language
														<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
														<img class="w-15px h-15px rounded-1 ms-2" src="{{  asset('admin/assets/media/flags/united-states.svg')  }}" alt="metronic" /></span></span>
                                            </a>
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5 active">
															<span class="symbol symbol-20px me-4">
																<img class="rounded-1" src="{{  asset('admin/assets/media/flags/united-states.svg')  }}" alt="metronic" />
															</span>English</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
															<span class="symbol symbol-20px me-4">
																<img class="rounded-1" src="{{  asset('admin/assets/media/flags/spain.svg')  }}" alt="metronic" />
															</span>Spanish</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
															<span class="symbol symbol-20px me-4">
																<img class="rounded-1" src="{{  asset('admin/assets/media/flags/germany.svg')  }}" alt="metronic" />
															</span>German</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
															<span class="symbol symbol-20px me-4">
																<img class="rounded-1" src="{{  asset('admin/assets/media/flags/japan.svg')  }}" alt="metronic" />
															</span>Japanese</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="account/settings.html" class="menu-link d-flex px-5">
															<span class="symbol symbol-20px me-4">
																<img class="rounded-1" src="{{  asset('admin/assets/media/flags/france.svg')  }}" alt="metronic" />
															</span>French</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5 my-1">
                                            <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                    <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                        <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                                        <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path fill-rule="evenodd" clip-rule="evenodd" d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z" fill="black" />
															<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z" fill="black" />
														</g>
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Heaeder menu toggle-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Post-->
                @yield('content')
                <!--end::Post-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-bold me-1">2021©</span>
                        <a href="" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
{{--<button id="kt_explore_toggle" class="btn btn-sm btn-white btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0" title="Explore Metronic" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">--}}
{{--    <span id="kt_explore_toggle_label">Explore</span>--}}
{{--</button>--}}
<!--end::Exolore drawer toggle-->
<!--begin::Exolore drawer-->
{{--<div id="kt_explore" class="bg-white" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '375px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">--}}
{{--    <!--begin::Card-->--}}
{{--    <div class="card shadow-none w-100">--}}
{{--        <!--begin::Header-->--}}
{{--        <div class="card-header" id="kt_explore_header">--}}
{{--            <h3 class="card-title fw-bolder text-gray-700">Explore Metronic</h3>--}}
{{--            <div class="card-toolbar">--}}
{{--                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_explore_close">--}}
{{--                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->--}}
{{--                    <span class="svg-icon svg-icon-2">--}}
{{--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--									<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">--}}
{{--										<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />--}}
{{--										<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />--}}
{{--									</g>--}}
{{--								</svg>--}}
{{--							</span>--}}
{{--                    <!--end::Svg Icon-->--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--end::Header-->--}}
{{--        <!--begin::Body-->--}}
{{--        <div class="card-body" id="kt_explore_body">--}}
{{--            <!--begin::Content-->--}}
{{--            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header, #kt_explore_footer" data-kt-scroll-offset="5px">--}}
{{--                <!--begin::Demos-->--}}
{{--                <div class="mb-0">--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo1</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 border-primary p-2 rounded">--}}
{{--                            <div class="overlay-wrapper rounded">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo1.png') }}" alt="demo" class="w-100 rounded" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-primary shadow">Preview</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo2</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper rounded">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo2.png') }}" alt="demo" class="w-100 rounded" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-primary shadow">Preview</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo3</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper rounded">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo3.png') }}" alt="demo" class="w-100 rounded" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-primary shadow">Preview</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo4</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo4.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo5</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper rounded">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo5.png') }}" alt="demo" class="w-100 rounded" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-primary shadow">Preview</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo6</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo6.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo7</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo7.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo8</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo8.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo9</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo9.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo10</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo10.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo11</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo11.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo12</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo12.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo13</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo13.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo14</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo14.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                    <!--begin::Demo-->--}}
{{--                    <div class="mb-7">--}}
{{--                        <h3 class="fw-bold text-center mb-3">Demo15</h3>--}}
{{--                        <div class="overlay overflow-hidden border border-4 p-2 rounded">--}}
{{--                            <div class="overlay-wrapper">--}}
{{--                                <img src="{{ asset('admin/assets/media/demos/demo15.png') }}" alt="demo" class="w-100 rounded opacity-75" />--}}
{{--                            </div>--}}
{{--                            <div class="overlay-layer bg-dark bg-opacity-10">--}}
{{--                                <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--end::Demo-->--}}
{{--                </div>--}}
{{--                <!--end::Demos-->--}}
{{--            </div>--}}
{{--            <!--end::Content-->--}}
{{--        </div>--}}
{{--        <!--end::Body-->--}}
{{--        <!--begin::Footer-->--}}
{{--        <div class="card-footer py-5 text-center" id="kt_explore_footer">--}}
{{--            <a href="https://1.envato.market/EA4JP" class="btn btn-primary">Purchase Metronic</a>--}}
{{--        </div>--}}
{{--        <!--end::Footer-->--}}
{{--    </div>--}}
{{--    <!--end::Card-->--}}
{{--</div>--}}
<!--end::Exolore drawer-->
<!--end::Drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
@livewireScripts
@include('sweetalert::alert')
<script src="{{  asset('admin/assets/plugins/global/plugins.bundle.js')  }}"></script>
<script src="{{  asset('admin/assets/js/scripts.bundle.js')  }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{  asset('admin/assets/js/custom/widgets.js')  }}"></script>
{{--<script src="{{  asset('admin/assets/js/custom/apps/chat/chat.js')  }}"></script>--}}
{{--<script src="{{  asset('admin/assets/js/custom/modals/create-app.js')  }}"></script>--}}
<script src="{{  asset('admin/assets/js/custom/modals/upgrade-plan.js')  }}"></script>
@yield('script')
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
