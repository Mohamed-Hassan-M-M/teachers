@extends('layouts.app')

@section('content')

    <!-- Start: Header Section -->
    <header id="header" class="inner-navbar-wrapper navbar-wrapper">
        <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
        <div class="container-fluid">
            <nav @if(app()->getLocale() == 'ar') style="direction: rtl"
                 @endif class="navbar navbar-expand-lg navbar-light bg-light">
                <a style="width:15%" class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('app-assets/images/logo.png')}}" alt="Skille"/>
                </a>
                {{--                <div class="inner-header-search">--}}
                {{--                    <input class="form-control" type="text" placeholder="Search Anything">--}}
                {{--                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>--}}
                {{--                </div>--}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">@lang('general.home')</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('teacher.about')}}">@lang('general.aboutUs')</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                        </li>
                        {{--                        <li class="nav-item ">--}}
                        {{--                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.events')</a>--}}
                        {{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                        </li>
                        <li class="nav-item">
                            @if(app()->getLocale() == 'en')
                                <a class="nav-link" style="text-decoration: underline;text-transform: lowercase"
                                   href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">@lang('general.arabic')</a>
                            @else
                                <a class="nav-link" style="text-decoration: underline;text-transform: lowercase"
                                   href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">@lang('general.english')</a>
                            @endif

                        </li>
                    </ul>
                    @if(auth()->check() && auth()->user()->type == '3')
                        <div class="header-login-btn">
                            <a class="btn btn-light active" style="cursor: none">{{auth()->user()->username}}</a>
                        </div>
                    @else
                        <div class="header-login-btn">
                            <a href="{{route('login')}}" class="btn btn-light"><i class="fa fa-user"></i>
                                @lang('general.login')</a>
                        </div>
                    @endif
                </div>
            </nav>
            <!-- Header Main Navigation End-->
            <!-- Mobile Navigation-->
            <div class="mobile-menu d-lg-none">
                <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                <div id="mobile-menu">
                    <ul>
                        <li class="mobile-title">
                            <h4>@lang('general.menu')</h4>
                            <a href="#" class="close"></a>
                        </li>
                        <li>
                            <a href="{{route('home')}}">@lang('general.home')</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.about')}}">@lang('general.aboutUs')</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                        </li>
                        {{--                        <li>--}}
                        {{--                            <a href="{{route('teacher.grid')}}">@lang('general.events')</a>--}}
                        {{--                        </li>--}}
                        <li>
                            <a href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                        </li>
                        <li>
                            @if(app()->getLocale() == 'en')
                                <a style="text-decoration: underline;text-transform: lowercase"
                                   href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">@lang('general.arabic')</a>
                            @else
                                <a style="text-decoration: underline;text-transform: lowercase"
                                   href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">@lang('general.english')</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Mobile Navigation End-->
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Page Banner -->
    <section class="inner-page-banner">
        <div class="container">
            <div class="banner-header">
                <h2>@lang('general.aboutUs')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center"
                        @if(app()->getLocale() == 'ar') style="direction: rtl" @endif>
                        <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('general.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('general.aboutUs')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Services Section -->
    <section class="company-services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="sub-heading-v2">What We Are Offering</h6>
                    <h2 class="heading-v2">Build your own online library for your personal growth and Skills</h2>
                    <p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                        non-characteristic words etc.dolor sit amet, consectetur adipiscing elit. Pellentesque dolor
                        turpis, pulvinar varius dui id, convallis iaculis
                        eros. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or
                        non-characteristic words etc.dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="view-all-feature">View All Features <i class="fa fa-long-arrow-right"></i></a>
                    <div class="company-feature-main">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-feature text-center">
                                    <img src="{{asset('app-assets/images/icons/meeting-room-icon.png')}}" alt="">
                                    <h3>Meeting Rooms</h3>
                                    <p>It is a long established fact that reader will be distracted by the readable
                                        content of a page.</p>
                                    <a href="#" class="view-detail">View In Detail <i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 extra-mb-50">
                                <div class="single-feature text-center">
                                    <img src="{{asset('app-assets/images/icons/interlibrary-loan-icon.png')}}" alt="">
                                    <h3>Interlibrary Loan</h3>
                                    <p>It is a long established fact that reader will be distracted by the readable
                                        content of a page.</p>
                                    <a href="#" class="view-detail">View In Detail <i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="company-feature-main">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-feature text-center">
                                    <img src="{{asset('app-assets/images/icons/get-card-icon.png')}}" alt="">
                                    <h3>Get A Card</h3>
                                    <p>It is a long established fact that reader will be distracted by the readable
                                        content of a page.</p>
                                    <a href="#" class="view-detail">View In Detail <i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="single-feature text-center">
                                    <img src="{{asset('app-assets/images/icons/computer-wifi-icon.png')}}" alt="">
                                    <h3>Computers & Wifi</h3>
                                    <p>It is a long established fact that reader will be distracted by the readable
                                        content of a page.</p>
                                    <a href="#" class="view-detail">View In Detail <i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 extra-tm-100">
                                <div class="single-feature text-center">
                                    <img src="{{asset('app-assets/images/icons/home-delivery-icon.png')}}" alt="">
                                    <h3>Home Delivery</h3>
                                    <p>It is a long established fact that reader will be distracted by the readable
                                        content of a page.</p>
                                    <a href="#" class="view-detail">View In Detail <i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="single-feature text-center">
                                    <img src="{{asset('app-assets/images/icons/job-help-icon.png')}}" alt="">
                                    <h3>Job Help</h3>
                                    <p>It is a long established fact that reader will be distracted by the readable
                                        content of a page.</p>
                                    <a href="#" class="view-detail">View In Detail <i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Services Section -->

    <!-- Start: Facts Counter -->
    <section class="layout-v2-counter layout-v3-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="home-video">
                        <video id="myvideo" controls poster="{{asset('app-assets/images/video-poster-2.png')}}">
                            <source
                                src="https://archive.org/download/BigBuckBunny_124/Content/big_buck_bunny_720p_surround.mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="facts-counter">
                        <ul>
                            <li class="color-pink">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <img src="{{asset('app-assets/images/counter-video-icon-v2.png')}}" alt="">
                                    </div>
                                    <span>Videos<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                            <li class="color-cyan-blue">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <img src="{{asset('app-assets/images/counter-books-icon-v2.png')}}" alt="">
                                    </div>
                                    <span>eBooks<strong class="fact-counter">45780</strong></span>
                                </div>
                            </li>
                            <li class="color-yellow">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <img src="{{asset('app-assets/images/counter-magazines-icon-v2.png')}}" alt="">
                                    </div>
                                    <span>Magazine<strong class="fact-counter">14450</strong></span>
                                </div>
                            </li>
                            <li class="color-violet">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <img src="{{asset('app-assets/images/counter-aduio-icon-v2.png')}}" alt="">
                                    </div>
                                    <span>eAudio<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="ultimate-collection">
                        <h6 class="sub-heading-v2">Who We Are</h6>
                        <h3 class="heading-v2">Find The World's Largest Collection of Books & Courses</h3>
                        <p>Choose from over 35000+ online collections with new additions published every month. Flexible
                            study according to your own needs. You will feel like you are attending your classes
                            physically. Choose from over 35000+ online collections
                            with new additions published every month. Flexible study according to your own needs. You
                            will feel like you are attending your classes physically!</p>
                        <a href="#" class="btn btn-primary">Free Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Facts Counter -->

    <!-- Start: Image and Content Section -->
    <section class="image-content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-7 mx-auto text-center">
                    <h6 class="sub-heading-v2">Study Room</h6>
                    <h3 class="heading-v2">We Have To Go Through The Hard Stuff To Get to The Places We Want To Be</h3>
                </div>
            </div>
            <img src="{{asset('app-assets/images/image-content-image-1.png')}}" alt="">
            <p>Curabitur vehicula sem rutrum tincidunt gravida. Etiam dapibus eros sed pretium placerat. Donec ultricies
                sagittis iaculis. Donec ut dapibus elit. Class aptent taciti sociosqu ad litora torquent per conubia
                nostra, per inceptos himenaeos.
                Donec molestie sed urna at dictum. Cras felis nibh, porttitor a aliquam at, ultricies et arcu. Duis sed
                eros et enim semper congue non quis sapien. Quisque in aliquet ipsum. Sed dapibus enim eget libero
                aliquam suscipit. Aenean sodales,
                felis nec viverra aliquam, erat enim tincidunt nisl, vitae bibendum magna tortor nec diam. Integer quis
                elementum tortor, non volutpat augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ante
                neque, tincidunt a pharetra
                vel, semper eget justo.</p>
            <a href="#" class="btn btn-primary">Get A card</a>
        </div>
    </section>
    <!-- End: Image and Content Section -->

    <!-- Start: More Books Section -->
    <section class="books-more-section">
        <div class="container">
            <div class="community-slider-extra-mt">
                <div class="community-slider text-center">
                    <h6 class="sub-heading-v2">User Testimonial</h6>
                    <h2 class="heading-v2">Words From our Community</h2>
                    <div id="communitycarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p>Sed elit quam, iaculis sed semper sit amet, sollicitudin vitae nibh. Quisque at magna
                                    eu augue semper euismod. Fusce commodo molestie luctus. Fusce commodo molestie
                                    luctus. Donec mollis nulla ipsum, vitae faucibus dui dapibus
                                    at. Cras ullamcorper eget ipsum vel volutpat. Phasellus rhoncus in sapien tincidunt.
                                    The point of using Lorem Ipsum is that it has a more-or-less normal. The point of
                                    using Lorem Ipsum is that it has a more-or-less
                                    normal.
                                </p>
                                <div class="testi-user-info">
                                    <img src="{{asset('app-assets/images/community-testi-thumb.png')}}" alt="">
                                    <span>
                                        <strong>Stephane Lunoe</strong>
                                        <small>TripAdvisor</small>
                                    </span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p>Sed elit quam, iaculis sed semper sit amet, sollicitudin vitae nibh. Quisque at magna
                                    eu augue semper euismod. Fusce commodo molestie luctus. Fusce commodo molestie
                                    luctus. Donec mollis nulla ipsum, vitae faucibus dui dapibus
                                    at. Cras ullamcorper eget ipsum vel volutpat. Phasellus rhoncus in sapien tincidunt.
                                    The point of using Lorem Ipsum is that it has a more-or-less normal dapibus at..</p>
                                <div class="testi-user-info">
                                    <img src="{{asset('app-assets/images/community-testi-thumb.png')}}" alt="">
                                    <span>
                                        <strong>Stephane Lunoe</strong>
                                        <small>TripAdvisor</small>
                                    </span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <p>Sed elit quam, iaculis sed semper sit amet, sollicitudin vitae nibh. Quisque at magna
                                    eu augue semper euismod. Fusce commodo molestie luctus. Fusce commodo molestie
                                    luctus. Donec mollis nulla ipsum, vitae faucibus dui dapibus
                                    at. Cras ullamcorper eget ipsum vel volutpat. Phasellus rhoncus in sapien tincidunt.
                                    The point of using Lorem Ipsum is that it has a more-or-less normal.
                                </p>
                                <div class="testi-user-info">
                                    <img src="{{asset('app-assets/images/community-testi-thumb.png')}}" alt="">
                                    <span>
                                        <strong>Stephane Lunoe</strong>
                                        <small>TripAdvisor</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#communitycarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                    class="fa fa-angle-left"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#communitycarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                    class="fa fa-angle-right"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h6 class="sub-heading-v2">Books And More</h6>
                    <h2 class="heading-v2">Take a good book to bed with you— books do not snore.
                    </h2>
                    <p>Choose from over 35000+ online collections with new additions published every month. Flexible
                        study according to your own needs. You will feel like you are attending your classes physically!
                    </p>
                    <a href="#" class="btn btn-primary">Make A Request</a>
                </div>
                <div class="col-md-7">
                    <img src="{{asset('app-assets/images/book-more-section-img.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End: More Books Section -->

    <!-- Start: Meet Staff -->
    <section class="meet-staff-box inner-staff-box section-padding" style="background: none;">
        <div class="container">
            <div class="row">
                <div class="center-content">
                    <h6 class="sub-heading-v2">Instructors</h6>
                    <h2 class="heading-v2">Meet Our Staff</h2>
                </div>
                <div class="staff-list">
                    <div class="staff-member">
                        <figure>
                            <img src="{{asset('app-assets/images/team-img-04.jpg')}}" alt="team"/>
                        </figure>
                        <div class="content-block">
                            <div class="staff-info">
                                <h4>Anna Delpan</h4>
                                <span class="designation">Executive Director</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="readmore"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="staff-member">
                        <figure>
                            <img src="{{asset('app-assets/images/team-img-05.jpg')}}" alt="team"/>
                        </figure>
                        <div class="content-block">
                            <div class="staff-info">
                                <h4>David J. Seleb</h4>
                                <span class="designation">Deputy Director</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="readmore"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="staff-member">
                        <figure>
                            <img src="{{asset('app-assets/images/team-img-06.jpg')}}" alt="team"/>
                        </figure>
                        <div class="content-block">
                            <div class="staff-info">
                                <h4>Stephane Lunoe</h4>
                                <span class="designation">Director</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="readmore"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="staff-member">
                        <figure>
                            <img src="{{asset('app-assets/images/team-img-07.jpg')}}" alt="team"/>
                        </figure>
                        <div class="content-block">
                            <div class="staff-info">
                                <h4>Robert Simmons</h4>
                                <span class="designation">Deputy Director</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="readmore"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Meet Staff -->

@endsection

@push('scripts')
    <script>

        $(document).ready(function () {

        });

    </script>
@endpush
