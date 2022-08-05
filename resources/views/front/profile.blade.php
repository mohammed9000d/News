@extends('front.master')

@section('title', 'Profile')

@section('content')
    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary" style="background: url('{{ asset('front/images/blog/bg.png') }}') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-3 text-md-start text-center">
                                    <img src="{{ asset('front/images/user.jpg') }}" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                </div><!--end col-->

                                <div class="col-lg-10 col-md-9">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 text-md-start text-center mt-4 mt-sm-0">
                                            <h3 class="title mb-0">{{ auth()->user()->name }}</h3>
                                            <small class="text-muted h6 me-2">Web Developer</small>
                                            <ul class="list-inline mb-0 mt-3">
                                                <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-muted" title="Instagram"><i data-feather="instagram" class="fea icon-sm me-2"></i>krista_joseph</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted" title="Linkedin"><i data-feather="linkedin" class="fea icon-sm me-2"></i>Krista Joseph</a></li>
                                            </ul>
                                        </div><!--end col-->
                                        <div class="col-md-5 text-md-end text-center">
                                            <ul class="list-unstyled social-icon social mb-0 mt-4">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add Friend"><i class="uil uil-user-plus align-middle"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messages"><i class="uil uil-comment align-middle"></i></a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notifications"><i class="uil uil-bell align-middle"></i></a></li>
                                                <li class="list-inline-item"><a href="account-setting.html" class="rounded" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Settings"><i class="uil uil-cog align-middle"></i></a></li>
                                            </ul><!--end icon-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--ed container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Profile Start -->
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                    <div class="sidebar sticky-bar p-4 rounded shadow">
                        <div class="widget mt-4">
                            <ul class="list-unstyled sidebar-nav mb-0" id="navmenu-nav">
                                <li class="navbar-item account-menu px-0">
                                    <a href="{{ route('profile') }}" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                        <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="mb-0 ms-2">Profile</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu px-0 mt-2">
                                    <a href="{{ route('change-password') }}" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                        <span class="h4 mb-0"><i class="uil uil-setting"></i></span>
                                        <h6 class="mb-0 ms-2">Change Password</h6>
                                    </a>
                                </li>

                                <li class="navbar-item account-menu px-0 mt-2">
                                    <a href="{{ route('logout') }}" class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                        <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="mb-0 ms-2">Logout</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-12">
                    <div class="card border-0 rounded shadow">
                        <div class="card-body">
                            <h5 class="text-md-start text-center">Personal Detail :</h5>

                            <div class="mt-3 text-md-start text-center d-sm-flex">
                                <img src="{{ asset('front/images/user.jpg') }}" class="avatar float-md-left avatar-medium rounded-circle shadow me-md-4" alt="">

                                <div class="mt-md-4 mt-3 mt-sm-0">
                                    <a href="javascript:void(0)" class="btn btn-primary mt-2">Change Picture</a>
                                    <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ms-2">Delete</a>
                                </div>
                            </div>

                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="first" type="text" class="form-control ps-5" placeholder="First Name :" value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Your email :" value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone No.</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="phone" id="phone" type="text" class="form-control ps-5" placeholder="Your Phone :" value="{{ $profile->phone }}">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="address" id="address" type="text" class="form-control ps-5" placeholder="Your Address :" value="{{ $profile->address }}">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save Changes">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->


{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 mt-4 pt-2">--}}
{{--                                    <h5>Contact Info :</h5>--}}

{{--                                    <form>--}}
{{--                                        <div class="row mt-4">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Phone No. :</label>--}}
{{--                                                    <div class="form-icon position-relative">--}}
{{--                                                        <i data-feather="phone" class="fea icon-sm icons"></i>--}}
{{--                                                        <input name="number" id="number" type="number" class="form-control ps-5" placeholder="Phone :">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!--end col-->--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Website :</label>--}}
{{--                                                    <div class="form-icon position-relative">--}}
{{--                                                        <i data-feather="globe" class="fea icon-sm icons"></i>--}}
{{--                                                        <input name="url" id="url" type="url" class="form-control ps-5" placeholder="Url :">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!--end col-->--}}

{{--                                            <div class="col-lg-12 mt-2 mb-0">--}}
{{--                                                <button class="btn btn-primary">Add</button>--}}
{{--                                            </div><!--end col-->--}}
{{--                                        </div><!--end row-->--}}
{{--                                    </form>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-md-6 mt-4 pt-2">--}}
{{--                                    <h5>Change password :</h5>--}}
{{--                                    <form>--}}
{{--                                        <div class="row mt-4">--}}
{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Old password :</label>--}}
{{--                                                    <div class="form-icon position-relative">--}}
{{--                                                        <i data-feather="key" class="fea icon-sm icons"></i>--}}
{{--                                                        <input type="password" class="form-control ps-5" placeholder="Old password" required="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!--end col-->--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">New password :</label>--}}
{{--                                                    <div class="form-icon position-relative">--}}
{{--                                                        <i data-feather="key" class="fea icon-sm icons"></i>--}}
{{--                                                        <input type="password" class="form-control ps-5" placeholder="New password" required="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!--end col-->--}}

{{--                                            <div class="col-lg-12">--}}
{{--                                                <div class="mb-3">--}}
{{--                                                    <label class="form-label">Re-type New password :</label>--}}
{{--                                                    <div class="form-icon position-relative">--}}
{{--                                                        <i data-feather="key" class="fea icon-sm icons"></i>--}}
{{--                                                        <input type="password" class="form-control ps-5" placeholder="Re-type New password" required="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div><!--end col-->--}}

{{--                                            <div class="col-lg-12 mt-2 mb-0">--}}
{{--                                                <button class="btn btn-primary">Save password</button>--}}
{{--                                            </div><!--end col-->--}}
{{--                                        </div><!--end row-->--}}
{{--                                    </form>--}}
{{--                                </div><!--end col-->--}}
{{--                            </div><!--end row-->--}}
                        </div>
                    </div>


{{--                    <div class="rounded shadow mt-4">--}}
{{--                        <div class="p-4 border-bottom">--}}
{{--                            <h5 class="mb-0">Account Notifications :</h5>--}}
{{--                        </div>--}}

{{--                        <div class="p-4">--}}
{{--                            <div class="d-flex justify-content-between pb-4">--}}
{{--                                <h6 class="mb-0">When someone mentions me</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="noti1">--}}
{{--                                    <label class="form-check-label" for="noti1"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between py-4 border-top">--}}
{{--                                <h6 class="mb-0">When someone follows me</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" checked id="noti2">--}}
{{--                                    <label class="form-check-label" for="noti2"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between py-4 border-top">--}}
{{--                                <h6 class="mb-0">When shares my activity</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="noti3">--}}
{{--                                    <label class="form-check-label" for="noti3"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between py-4 border-top">--}}
{{--                                <h6 class="mb-0">When someone messages me</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="noti4">--}}
{{--                                    <label class="form-check-label" for="noti4"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="rounded shadow mt-4">--}}
{{--                        <div class="p-4 border-bottom">--}}
{{--                            <h5 class="mb-0">Marketing Notifications :</h5>--}}
{{--                        </div>--}}

{{--                        <div class="p-4">--}}
{{--                            <div class="d-flex justify-content-between pb-4">--}}
{{--                                <h6 class="mb-0">There is a sale or promotion</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="noti5">--}}
{{--                                    <label class="form-check-label" for="noti5"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between py-4 border-top">--}}
{{--                                <h6 class="mb-0">Company news</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" id="noti6">--}}
{{--                                    <label class="form-check-label" for="noti6"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between py-4 border-top">--}}
{{--                                <h6 class="mb-0">Weekly jobs</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" checked id="noti7">--}}
{{--                                    <label class="form-check-label" for="noti7"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between py-4 border-top">--}}
{{--                                <h6 class="mb-0">Unsubscribe News</h6>--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" value="" checked id="noti8">--}}
{{--                                    <label class="form-check-label" for="noti8"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="rounded shadow mt-4">--}}
{{--                        <div class="p-4 border-bottom">--}}
{{--                            <h5 class="mb-0 text-danger">Delete Account :</h5>--}}
{{--                        </div>--}}

{{--                        <div class="p-4">--}}
{{--                            <h6 class="mb-0">Do you want to delete the account? Please press below "Delete" button</h6>--}}
{{--                            <div class="mt-4">--}}
{{--                                <button class="btn btn-danger">Delete Account</button>--}}
{{--                            </div><!--end col-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Profile Setting End -->
@endsection
