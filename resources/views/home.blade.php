@extends('layouts.app')

@section('content')
    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper">
        <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-topbar">
                        <div class="row">
                            <div class="col-sm-6 col-md-8 d-none d-sm-block">
                                <div class="topbar-info">
                                    <a href="tel:+20222611181"><i class="fa fa-phone"></i>@lang('general.callUs')
                                        +2 (02) 22611181</a>
                                    <span>/</span>
                                    <a href="mailto:info@212solutions.net"><i class="fa fa-envelope"></i>@lang('general.emailNow')
                                        info@212solutions.net</a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="topbar-links">
                                    @if(auth()->check() && auth()->user()->type == '3')
                                    <span><i class="fa fa-user"></i> {{auth()->user()->username}}</span>
                                    @else
                                        <a href="{{route('login')}}"><i class="fa fa-lock"></i>@lang('general.login')</a>
                                        <a href="{{route('register')}}">@lang('general.register')</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default">
                        <div class="row w-100 no-gutters">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <a href="{{route('home')}}">
                                            <img src="{{asset('app-assets/images/logo-header-v1.png')}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="collapse navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav m-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('home')}}">@lang('general.home')</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{route('teacher.about')}}">@lang('general.aboutUs')</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                                        </li>
{{--                                        <li class="nav-item ">--}}
{{--                                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.events')</a>--}}
{{--                                        </li>--}}
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                                        </li>
                                        <li class="nav-item">
                                            @if(app()->getLocale() == 'en')
                                                <a class="nav-link" style="text-decoration: underline;text-transform: lowercase" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">@lang('general.arabic')</a>
                                            @else
                                                <a class="nav-link" style="text-decoration: underline;text-transform: lowercase" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">@lang('general.english')</a>
                                            @endif

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
{{--                                    <li>--}}
{{--                                        <a href="{{route('teacher.grid')}}">@lang('general.events')</a>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                                    </li>
                                    <li>
                                        @if(app()->getLocale() == 'en')
                                            <a style="text-decoration: underline;text-transform: lowercase" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">@lang('general.arabic')</a>
                                        @else
                                            <a style="text-decoration: underline;text-transform: lowercase" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">@lang('general.english')</a>
                                        @endif

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Slider Section -->
    <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel" data-interval="false" data-pause="hover">
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <figure>
                    <img alt="Home Slide" class="d-block w-100" src="{{asset('app-assets/images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="carousel-caption" data-aos="fade-down">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p @if(app()->getLocale() == 'ar') style="float: right; direction: rtl" @endif >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs" @if(app()->getLocale() == 'ar') style="clear: both" @endif >
                        <a href="{{route('login')}}" class="btn btn-primary">Get Started Now!<span></span></a>
                        <a href="{{route('register')}}" class="btn btn-light">Join Now<span></span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <figure>
                    <img alt="Home Slide" class="d-block w-100" src="{{asset('app-assets/images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p @if(app()->getLocale() == 'ar') style="float: right; direction: rtl" @endif >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs" @if(app()->getLocale() == 'ar') style="clear: both" @endif >
                        <a href="{{route('login')}}" class="btn btn-primary">Get Started Now!<span></span></a>
                        <a href="{{route('register')}}" class="btn btn-light">Join Now<span></span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <figure>
                    <img alt="Home Slide" class="d-block w-100" src="{{asset('app-assets/images/header-slider/home-v1/header-slide.jpg')}}" />
                </figure>
                <div class="carousel-caption">
                    <h3>Online Learning Anytime, Anywhere!</h3>
                    <h2>Discover Your Roots</h2>
                    <p @if(app()->getLocale() == 'ar') style="float: right; direction: rtl" @endif >There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.</p>
                    <div class="slide-buttons hidden-sm hidden-xs" @if(app()->getLocale() == 'ar') style="clear: both" @endif >
                        <a href="{{route('login')}}" class="btn btn-primary">Get Started Now!<span></span></a>
                        <a href="{{route('register')}}" class="btn btn-light">Join Now<span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        @if(app()->getLocale() == 'ar')
            <a class="carousel-control-prev" href="#home-v1-header-carousel" role="button" data-slide="prev">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <a class="carousel-control-next" href="#home-v1-header-carousel" role="button" data-slide="next">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
        @else
            <a class="carousel-control-prev" href="#home-v1-header-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#home-v1-header-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        @endif
    </div>
    <!-- End: Slider Section -->

    <!-- Start: Search Section -->
    <section class="search-filters">
        <div class="container">
            <div class="filter-box">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-12">
                        <h3>What are you looking for at the SKILLE?</h3>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <form action="{{route('home.search')}}" id="search" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="sector_id" id="sector_id" class="form-control" required>
                                            <option value="" dType="sector">@lang('general.all') @lang('general.sectors')</option>
                                            @foreach($sectors as $sector)
                                                <option value="{{$sector->id}}" dType="sector">{{$sector->type}} - {{$sector->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="class">
                                        <select name="class_id" id="class_id" class="form-control" required>
                                            <option value="">@lang('general.all') @lang('general.classes')</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" id="subject">
                                        <select name="subject_id" id="subject_id" class="form-control" required>
                                            <option value="">@lang('general.all') @lang('general.subjects')</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-center">
                                        <button id="btn_search" class="btn btn-primary">@lang('general.search')</button>
                                        <span id="error_subject" class="text-danger" style="display: none; font-weight: bolder;">select subject first</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Search Section -->

    <!-- Start: Welcome Section -->
    <section class="welcome-section" data-speed="0.06" data-revert="true">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h6 class="sub-title">Welcome to the skille</h6>
                        <h2 class="section-title">Your First Choice For Online Education Anywhere,Anytime</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-image" data-aos="fade-up-right">
                        <img src="{{asset('app-assets/images/welcome-img-home-v1.jpg')}}" class="algin-right" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="facts-counter" data-aos="fade-left">
                        <ul>
                            <li class="bg-light-blue">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="ebook"></i>
                                    </div>
                                    <span>Books<strong class="fact-counter">45780</strong></span>
                                </div>
                            </li>
                            <li class="bg-purple">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="eaudio"></i>
                                    </div>
                                    <span>Audio<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                            <li class="bg-pink">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="videos"></i>
                                    </div>
                                    <span>Videos<strong class="fact-counter">14450</strong></span>
                                </div>
                            </li>
                            <li class="bg-yellow">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="magazine"></i>
                                    </div>
                                    <span>Magazines<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="welcome-wrap" data-aos="fade-down">
                        <div class="welcome-text">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words which don't look even slightly believable. If you are going to use
                                a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                                first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore
                                always free from repetition, injected humor, or non-characteristic words etc.</p>
                            <a class="btn btn-primary" href="signup.html">Free Join Now<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Welcome Section -->

    <!-- Start: Features -->
    <section class="features">
        <div class="container">
            <ul>
                <li data-aos="fade-left">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/books-collection.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Collection Of Books</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </li>
                <li data-aos="fade-down">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/ebooks.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Download or Read eBooks</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </li>
                <li data-aos="fade-right">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/dvd.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Watch and Download DVDs</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </li>
                <li data-aos="fade-left">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/magazines.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Variety of Magazines</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </li>
                <li data-aos="fade-up">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/audio.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>Audio for Books & Magazine</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </li>
                <li data-aos="fade-right">
                    <div class="feature-box">
                        <div class="image">
                            <img src="{{asset('app-assets/images/features/home-v1/eaudio.jpg')}}" alt="Books Collection" />
                        </div>
                        <h3>eAudios</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Features -->

    <!-- Start: News & Event -->
    <section class="news-events section-padding banner">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="sub-title">New & Events</h6>
                        <h2 class="section-title">Latest News & Events</h2>
                    </div>
                </div>
            </div>
            <div class="news-events-list">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-5 col-xl-6">
                        <div class="single-news-event first-news-event" data-aos="fade-down">
                            <figure>
                                <img class="rounded-border" src="{{asset('app-assets/images/news-event/home-news-event-01.jpg')}}"
                                     alt="News & Event" />
                            </figure>
                            <div class="content-block bottom-left-rounded">
                                <div class="member-info">
                                    <div class="content_meta_category">
                                        <span class="arrow-right"></span>
                                        <a href="#" rel="category tag">EVENT</a>
                                    </div>
                                    <ul class="news-event-info">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-calendar"></i>
                                                July 25, 2016
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-map-marker"></i>
                                                New York, USA
                                            </a>
                                        </li>
                                    </ul>
                                    <h3><a href="">It uses a dictionary of over 200 Latin word</a></h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of
                                        letters, as opposed to using 'Content here, content here', making it look like
                                        readable
                                        English. Many desktop publishing packages and web page editors now use Lorem
                                        Ipsum as
                                        their default model.</p>
                                    <a class="btn btn-secondary" style="visibility: hidden" href="news-events-detail.html">Read More</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 col-xl-6">
                        <div class="single-news-event second-news-event" data-aos="fade-right">
                            <div class="content-block">
                                <div class="member-info">
                                    <div class="content_meta_category">
                                        <span class="arrow-right"></span>
                                        <a href="#" rel="category tag">EVENT</a>
                                    </div>
                                    <ul class="news-event-info">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-calendar"></i>
                                                July 25, 2016
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-map-marker"></i>
                                                New York, USA
                                            </a>
                                        </li>
                                    </ul>
                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin word</a></h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of
                                        letters, as opposed to using 'Content here, content here', </p>
                                    <a class="btn btn-secondary" style="visibility: hidden" href="news-events-detail.html">Read More</a>
                                </div>
                            </div>
                            <figure>
                                <img class="rounded-border" src="{{asset('app-assets/images/news-event/home-news-event-02.jpg')}}"
                                     alt="News & Event" />
                            </figure>
                            <div class="clearfix"></div>
                        </div>
                        <div class="single-news-event third-news-event" data-aos="fade-left">
                            <figure>
                                <img src="{{asset('app-assets/images/news-event/home-news-event-03.jpg')}}" alt="News & Event" />
                            </figure>
                            <div class="content-block bottom-right-rounded">
                                <div class="member-info">
                                    <div class="content_meta_category">
                                        <span class="arrow-right"></span>
                                        <a href="#" rel="category tag">EVENT</a>
                                    </div>
                                    <ul class="news-event-info">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-calendar"></i>
                                                July 25, 2016
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="fa fa-map-marker"></i>
                                                New York, USA
                                            </a>
                                        </li>
                                    </ul>
                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin word</a></h3>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                        of
                                        letters, as opposed to using 'Content here, content here', </p>
                                    <a href="news-events-detail.html" style="visibility: hidden" class="btn btn-secondary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: News & Event -->

    <!-- Start: Our Community Section -->
    <section class="community-testimonial">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="sub-title">User Testimonial</h6>
                        <h2 class="section-title">Words From our Community</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel">
                <div class="single-testimonial-box" data-aos="fade-left">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box" data-aos="fade-right">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-01.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Adrey Pachai <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-testimonial-box">
                    <div class="top-portion">
                        <img src="{{asset('app-assets/images/testimonial-image-02.jpg')}}" alt="Testimonial Image" />
                        <div class="user-comment">
                            <div class="arrow-left"></div>
                            <blockquote cite="#">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna magna, rhoncus
                                eget commodo et, dignissim non nulla. Sed sit amet vestibulum ex. Donec dolor velit
                            </blockquote>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bottom-portion">
                        <a href="#" class="author">
                            Maria B <small>(Student )</small>
                        </a>
                        <div class="social-share-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Our Community Section -->

{{--    <!-- Start: Latest Blog -->--}}
{{--    <section class="latest-blog section-padding banner">--}}
{{--        <div class="container">--}}
{{--            <div class="title-content text-center" data-aos="fade-up">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-8 mx-auto text-center">--}}
{{--                        <h6 class="sub-title">Our Blog</h6>--}}
{{--                        <h2 class="section-title">Latest Blog Posts</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="tabs-container">--}}
{{--                <div class="tabs-menu">--}}
{{--                    <ul>--}}
{{--                        <li class="active">--}}
{{--                            <a href="#" class="bg-light-blue top-left-rounded">--}}
{{--                                <div class="title">--}}
{{--                                    <i class="yellow"></i>--}}
{{--                                    <h3>Books</h3>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="bg-purple">--}}
{{--                                <div class="title">--}}
{{--                                    <i class="light-green"></i>--}}
{{--                                    <h3>eBooks</h3>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="bg-pink">--}}
{{--                                <div class="title">--}}
{{--                                    <i class="blue"></i>--}}
{{--                                    <h3>DVDS</h3>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="bg-yellow">--}}
{{--                                <div class="title">--}}
{{--                                    <i class="red"></i>--}}
{{--                                    <h3>Magazines</h3>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="bg-indigo bottom-left-rounded">--}}
{{--                                <div class="title">--}}
{{--                                    <i class="violet"></i>--}}
{{--                                    <h3>Audio</h3>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="bg-orange">--}}
{{--                                <div class="title">--}}
{{--                                    <i class="green"></i>--}}
{{--                                    <h3>eAudio</h3>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="tabs-list">--}}
{{--                    <div class="tab-content active">--}}
{{--                        <article>--}}
{{--                            <div class="post-detail">--}}
{{--                                <div class="info-bar">--}}
{{--                                    <div class="comments">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-comment"></i> 37--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="likes">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-thumbs-o-up"></i> 110--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="viewed">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-eye"></i> 180--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="share">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-share-alt"></i> Share--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h4>It uses dictionary over 200 Latin</h4>--}}
{{--                                <div class="author">--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fa fa-user"></i> Adrey Pachai--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper--}}
{{--                                    auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at--}}
{{--                                    malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio--}}
{{--                                    diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam--}}
{{--                                    condimentum semper mauris vitae porttitor.</p>--}}
{{--                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>--}}
{{--                            </div>--}}
{{--                            <figure>--}}
{{--                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1.jpg')}}" alt="Latest Blog">--}}
{{--                                <figcaption>--}}
{{--                                    <a href="#">--}}
{{--                                        <span class="date">07</span>--}}
{{--                                        <span class="month">Mar</span>--}}
{{--                                    </a>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="tab-content">--}}
{{--                        <article>--}}
{{--                            <div class="post-detail">--}}
{{--                                <div class="info-bar">--}}
{{--                                    <div class="comments">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-comment"></i> 37--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="likes">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-thumbs-o-up"></i> 110--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="viewed">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-eye"></i> 180--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="share">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-share-alt"></i> Share--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h4>eBooks</h4>--}}
{{--                                <div class="author">--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fa fa-user"></i> Adrey Pachai--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.--}}
{{--                                    Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem--}}
{{--                                    erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris--}}
{{--                                    vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus--}}
{{--                                    imperdiet turpis, et semper enim massa ut.</p>--}}
{{--                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>--}}
{{--                            </div>--}}
{{--                            <figure>--}}
{{--                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1-2.jpg')}}" alt="Latest Blog">--}}
{{--                                <figcaption>--}}
{{--                                    <a href="#">--}}
{{--                                        <span class="date">06</span>--}}
{{--                                        <span class="month">Mar</span>--}}
{{--                                    </a>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="tab-content">--}}
{{--                        <article>--}}
{{--                            <div class="post-detail">--}}
{{--                                <div class="info-bar">--}}
{{--                                    <div class="comments">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-comment"></i> 37--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="likes">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-thumbs-o-up"></i> 110--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="viewed">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-eye"></i> 180--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="share">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-share-alt"></i> Share--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h4>DVDS</h4>--}}
{{--                                <div class="author">--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fa fa-user"></i> Adrey Pachai--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper--}}
{{--                                    auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at--}}
{{--                                    malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio--}}
{{--                                    diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam--}}
{{--                                    condimentum semper mauris vitae porttitor.</p>--}}
{{--                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>--}}
{{--                            </div>--}}
{{--                            <figure>--}}
{{--                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1.jpg')}}" alt="Latest Blog">--}}
{{--                                <figcaption>--}}
{{--                                    <a href="#">--}}
{{--                                        <span class="date">05</span>--}}
{{--                                        <span class="month">Mar</span>--}}
{{--                                    </a>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="tab-content">--}}
{{--                        <article>--}}
{{--                            <div class="post-detail">--}}
{{--                                <div class="info-bar">--}}
{{--                                    <div class="comments">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-comment"></i> 37--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="likes">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-thumbs-o-up"></i> 110--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="viewed">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-eye"></i> 180--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="share">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-share-alt"></i> Share--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h4>Magazines</h4>--}}
{{--                                <div class="author">--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fa fa-user"></i> Adrey Pachai--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.--}}
{{--                                    Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem--}}
{{--                                    erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris--}}
{{--                                    vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus--}}
{{--                                    imperdiet turpis, et semper enim massa ut.</p>--}}
{{--                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>--}}
{{--                            </div>--}}
{{--                            <figure>--}}
{{--                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1-2.jpg')}}" alt="Latest Blog">--}}
{{--                                <figcaption>--}}
{{--                                    <a href="#">--}}
{{--                                        <span class="date">04</span>--}}
{{--                                        <span class="month">Mar</span>--}}
{{--                                    </a>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="tab-content">--}}
{{--                        <article>--}}
{{--                            <div class="post-detail">--}}
{{--                                <div class="info-bar">--}}
{{--                                    <div class="comments">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-comment"></i> 37--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="likes">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-thumbs-o-up"></i> 110--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="viewed">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-eye"></i> 180--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="share">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-share-alt"></i> Share--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h4>Audio</h4>--}}
{{--                                <div class="author">--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fa fa-user"></i> Adrey Pachai--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <p>Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper--}}
{{--                                    auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at--}}
{{--                                    malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio--}}
{{--                                    diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam--}}
{{--                                    condimentum semper mauris vitae porttitor.</p>--}}
{{--                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>--}}
{{--                            </div>--}}
{{--                            <figure>--}}
{{--                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1.jpg')}}" alt="Latest Blog">--}}
{{--                                <figcaption>--}}
{{--                                    <a href="#">--}}
{{--                                        <span class="date">03</span>--}}
{{--                                        <span class="month">Mar</span>--}}
{{--                                    </a>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="tab-content">--}}
{{--                        <article>--}}
{{--                            <div class="post-detail">--}}
{{--                                <div class="info-bar">--}}
{{--                                    <div class="comments">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-comment"></i> 37--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="likes">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-thumbs-o-up"></i> 110--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="viewed">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-eye"></i> 180--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="share">--}}
{{--                                        <a href="#">--}}
{{--                                            <i class="fa fa-share-alt"></i> Share--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <h4>eAudio</h4>--}}
{{--                                <div class="author">--}}
{{--                                    <a href="#">--}}
{{--                                        <i class="fa fa-user"></i> Adrey Pachai--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <p>Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus.--}}
{{--                                    Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem--}}
{{--                                    erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris--}}
{{--                                    vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus--}}
{{--                                    imperdiet turpis, et semper enim massa ut.</p>--}}
{{--                                <a href="blog-detail.html" class="btn btn-dark-gray">Read More</a>--}}
{{--                            </div>--}}
{{--                            <figure>--}}
{{--                                <img src="{{asset('app-assets/images/latest-blog-img-home-v1-2.jpg')}}" alt="Latest Blog">--}}
{{--                                <figcaption>--}}
{{--                                    <a href="#">--}}
{{--                                        <span class="date">02</span>--}}
{{--                                        <span class="month">Mar</span>--}}
{{--                                    </a>--}}
{{--                                </figcaption>--}}
{{--                            </figure>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End: Latest Blog -->--}}

    <!-- Start: Social Network -->

    <section class="social-network section-padding">
        <div class="container">
            <div class="title-content text-center" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h6 class="sub-title">Our Social Network</h6>
                        <h2 class="section-title">Follow Us</h2>
                    </div>
                </div>
            </div>
            <ul>
                <li>
                    <a class="facebook" href="#" target="_blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a class="google" href="#" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <i class="fa fa-rss"></i>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="#" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->

@endsection

@push('scripts')
    <script>

        $( document ).ready(function() {

            //get classes
            $('body').on('mouseup', 'li[dtype="sector"]', function() {
                var sector = $(this).attr('rel');
                $("#class").html("");
                $("#class").html(
                    '<select name="class_id" id="class_id" class="form-control"><option value="" dType="classes">' + "@lang('general.all') @lang('general.classes')" + '</option>'
                );

                //clear subject
                $("#subject").html("");
                $("#subject").html(
                    '<select name="subject_id" id="subject_id" class="form-control"><option value="" dType="subjects">' + "@lang('general.all') @lang('general.subjects')" + '</option></select>'
                );
                var selectObj = $('select#subject_id');
                var selectListObj = $('ul.select-list');
                selectObj.each(function () {
                    var $this = $(this), numberOfOptions = $(this).children('option').length;

                    $this.addClass('select-hidden');
                    $this.wrap('<div class="select"></div>');
                    $this.after('<div class="select-styled"></div>');

                    var $styledSelect = $this.next('div.select-styled');
                    $styledSelect.text($this.children('option').eq(0).text());

                    var $list = $('<ul />', {
                        'class': 'select-list'
                    }).insertAfter($styledSelect);

                    for (var i = 0; i < numberOfOptions; i++) {
                        $('<li />', {
                            text: $this.children('option').eq(i).text(),
                            rel: $this.children('option').eq(i).val(),
                            dType: $this.children('option').eq(i).attr('dType')
                        }).appendTo($list);
                    }

                    var $listItems = $list.children('li');

                    $styledSelect.on('click', function (e) {
                        e.stopPropagation();
                        $('div.select-styled.active').not(this).each(function () {
                            $(this).removeClass('active').next(selectListObj).hide();
                        });
                        $(this).toggleClass('active').next(selectListObj).toggle();
                    });

                    $listItems.on('click', function (e) {
                        e.stopPropagation();
                        $styledSelect.text($(this).text()).removeClass('active');
                        $this.val($(this).attr('rel'));
                        $list.hide();
                    });

                    $(document).on('click', function () {
                        $styledSelect.removeClass('active');
                        $list.hide();
                    });

                });

                let classes = "";
                if (sector) {
                    $.ajax({
                        url: "{{url('/') . '/class-search/'}}" + sector,
                        type: 'GET',
                        dataType: "json",
                        data: {},
                        success: function (data){
                            data = data.data;
                            if (data.length != 0) {
                                for (var x = 0; x < data.length; x++) {
                                    var item = data[x];
                                    classes +=
                                        '<option dType="classes" value="' +
                                        item.id +
                                        '">' +
                                        item['name_{{app()->getLocale()}}'] +
                                        "</option>";
                                }
                                $("#class_id").append(classes);
                                $("#class").append('</select>');
                                var selectObj = $('select#class_id');
                                var selectListObj = $('ul.select-list');
                                selectObj.each(function () {
                                    var $this = $(this), numberOfOptions = $(this).children('option').length;

                                    $this.addClass('select-hidden');
                                    $this.wrap('<div class="select"></div>');
                                    $this.after('<div class="select-styled"></div>');

                                    var $styledSelect = $this.next('div.select-styled');
                                    $styledSelect.text($this.children('option').eq(0).text());

                                    var $list = $('<ul />', {
                                        'class': 'select-list'
                                    }).insertAfter($styledSelect);

                                    for (var i = 0; i < numberOfOptions; i++) {
                                        $('<li />', {
                                            text: $this.children('option').eq(i).text(),
                                            rel: $this.children('option').eq(i).val(),
                                            dType: $this.children('option').eq(i).attr('dType')
                                        }).appendTo($list);
                                    }

                                    var $listItems = $list.children('li');

                                    $styledSelect.on('click', function (e) {
                                        e.stopPropagation();
                                        $('div.select-styled.active').not(this).each(function () {
                                            $(this).removeClass('active').next(selectListObj).hide();
                                        });
                                        $(this).toggleClass('active').next(selectListObj).toggle();
                                    });

                                    $listItems.on('click', function (e) {
                                        e.stopPropagation();
                                        $styledSelect.text($(this).text()).removeClass('active');
                                        $this.val($(this).attr('rel'));
                                        $list.hide();
                                    });

                                    $(document).on('click', function () {
                                        $styledSelect.removeClass('active');
                                        $list.hide();
                                    });

                                });
                            }
                            else {
                                $("#class").append('</select>');
                                var selectObj = $('select#class_id');
                                var selectListObj = $('ul.select-list');
                                selectObj.each(function () {
                                    var $this = $(this), numberOfOptions = $(this).children('option').length;

                                    $this.addClass('select-hidden');
                                    $this.wrap('<div class="select"></div>');
                                    $this.after('<div class="select-styled"></div>');

                                    var $styledSelect = $this.next('div.select-styled');
                                    $styledSelect.text($this.children('option').eq(0).text());

                                    var $list = $('<ul />', {
                                        'class': 'select-list'
                                    }).insertAfter($styledSelect);

                                    for (var i = 0; i < numberOfOptions; i++) {
                                        $('<li />', {
                                            text: $this.children('option').eq(i).text(),
                                            rel: $this.children('option').eq(i).val(),
                                            dType: $this.children('option').eq(i).attr('dType')
                                        }).appendTo($list);
                                    }

                                    var $listItems = $list.children('li');

                                    $styledSelect.on('click', function (e) {
                                        e.stopPropagation();
                                        $('div.select-styled.active').not(this).each(function () {
                                            $(this).removeClass('active').next(selectListObj).hide();
                                        });
                                        $(this).toggleClass('active').next(selectListObj).toggle();
                                    });

                                    $listItems.on('click', function (e) {
                                        e.stopPropagation();
                                        $styledSelect.text($(this).text()).removeClass('active');
                                        $this.val($(this).attr('rel'));
                                        $list.hide();
                                    });

                                    $(document).on('click', function () {
                                        $styledSelect.removeClass('active');
                                        $list.hide();
                                    });

                                });
                            }
                        },
                        error: function (reject){
                            console.log(reject);
                        }
                    });
                }
            });//end for get classes

            //get subjects
            $('body').on('mouseup', 'li[dtype="classes"]', function() {
                var classe = $(this).attr('rel');
                $("#subject").html("");
                $("#subject").html(
                    '<select name="subject_id" id="subject_id" class="form-control"><option value="" dType="subjects">' + "@lang('general.all') @lang('general.subjects')" + '</option>'
                );
                let subjects = "";
                if (classe) {
                    $.ajax({
                        url: "{{url('/') . '/subject-search/'}}" + classe,
                        type: 'GET',
                        dataType: "json",
                        data: {},
                        success: function (data){
                            data = data.data;
                            if (data.length != 0) {
                                for (var x = 0; x < data.length; x++) {
                                    var item = data[x];
                                    subjects +=
                                        '<option dType="subjects" value="' +
                                        item.id +
                                        '">' +
                                        item['name_{{app()->getLocale()}}'] +
                                        "</option>";
                                }
                                $("#subject_id").append(subjects);
                                $("#subject").append('</select>');
                                var selectObj = $('select#subject_id');
                                var selectListObj = $('ul.select-list');
                                selectObj.each(function () {
                                    var $this = $(this), numberOfOptions = $(this).children('option').length;

                                    $this.addClass('select-hidden');
                                    $this.wrap('<div class="select"></div>');
                                    $this.after('<div class="select-styled"></div>');

                                    var $styledSelect = $this.next('div.select-styled');
                                    $styledSelect.text($this.children('option').eq(0).text());

                                    var $list = $('<ul />', {
                                        'class': 'select-list'
                                    }).insertAfter($styledSelect);

                                    for (var i = 0; i < numberOfOptions; i++) {
                                        $('<li />', {
                                            text: $this.children('option').eq(i).text(),
                                            rel: $this.children('option').eq(i).val(),
                                            dType: $this.children('option').eq(i).attr('dType')
                                        }).appendTo($list);
                                    }

                                    var $listItems = $list.children('li');

                                    $styledSelect.on('click', function (e) {
                                        e.stopPropagation();
                                        $('div.select-styled.active').not(this).each(function () {
                                            $(this).removeClass('active').next(selectListObj).hide();
                                        });
                                        $(this).toggleClass('active').next(selectListObj).toggle();
                                    });

                                    $listItems.on('click', function (e) {
                                        e.stopPropagation();
                                        $styledSelect.text($(this).text()).removeClass('active');
                                        $this.val($(this).attr('rel'));
                                        $list.hide();
                                    });

                                    $(document).on('click', function () {
                                        $styledSelect.removeClass('active');
                                        $list.hide();
                                    });

                                });
                            }
                            else {
                                $("#subject").append('</select>');
                                var selectObj = $('select#subject_id');
                                var selectListObj = $('ul.select-list');
                                selectObj.each(function () {
                                    var $this = $(this), numberOfOptions = $(this).children('option').length;

                                    $this.addClass('select-hidden');
                                    $this.wrap('<div class="select"></div>');
                                    $this.after('<div class="select-styled"></div>');

                                    var $styledSelect = $this.next('div.select-styled');
                                    $styledSelect.text($this.children('option').eq(0).text());

                                    var $list = $('<ul />', {
                                        'class': 'select-list'
                                    }).insertAfter($styledSelect);

                                    for (var i = 0; i < numberOfOptions; i++) {
                                        $('<li />', {
                                            text: $this.children('option').eq(i).text(),
                                            rel: $this.children('option').eq(i).val(),
                                            dType: $this.children('option').eq(i).attr('dType')
                                        }).appendTo($list);
                                    }

                                    var $listItems = $list.children('li');

                                    $styledSelect.on('click', function (e) {
                                        e.stopPropagation();
                                        $('div.select-styled.active').not(this).each(function () {
                                            $(this).removeClass('active').next(selectListObj).hide();
                                        });
                                        $(this).toggleClass('active').next(selectListObj).toggle();
                                    });

                                    $listItems.on('click', function (e) {
                                        e.stopPropagation();
                                        $styledSelect.text($(this).text()).removeClass('active');
                                        $this.val($(this).attr('rel'));
                                        $list.hide();
                                    });

                                    $(document).on('click', function () {
                                        $styledSelect.removeClass('active');
                                        $list.hide();
                                    });

                                });
                            }
                        },
                        error: function (reject){
                            console.log(reject);
                        }
                    });
                }
            });//end for get subjects

            $('#btn_search').on('click', function (e){
                e.preventDefault();
                if($('#subject_id').val() != '' && $('#subject_id').val() != null){
                    $('#search').submit();
                    $('#error_subject').hide();
                }
                else{
                    $('#error_subject').show();
                }
            });//submit form

        });//end for ready

    </script>
@endpush
