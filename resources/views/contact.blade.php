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
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('teacher.about')}}">@lang('general.aboutUs')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('event.grid')}}">@lang('general.events')</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                        </li>
                        <li class="nav-item">
                            @if(app()->getLocale() == 'en')
                                <a class="nav-link" style="text-decoration: underline;"
                                   href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">@lang('general.arabic')</a>
                            @else
                                <a class="nav-link" style="text-decoration: underline;"
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
                        <li>
                            <a href="{{route('event.grid')}}">@lang('general.events')</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                        </li>
                        <li>
                            @if(app()->getLocale() == 'en')
                                <a style="text-decoration: underline;"
                                   href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">@lang('general.arabic')</a>
                            @else
                                <a style="text-decoration: underline;"
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

    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13810.371717260483!2d31.3032368!3d30.0772008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fb50ce22f6b%3A0x72eb5e5554957f92!2s212%20Solutions!5e0!3m2!1sar!2seg!4v1631828857384!5m2!1sar!2seg"
            height="600" style="border:0;width: 100%" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="about-company-detail">
        <div class="container">
            <ul>
                <li>
                    <img src="{{asset('app-assets/images/icons/location-icon.png')}}" alt="">
                    <h6>Our Location</h6>
                    <ol>
                        <li>Obour Buildings, Salah Salem Street</li>
                        <li>Nasr City, Cairo</li>
                    </ol>
                </li>
                <li>
                    <img src="{{asset('app-assets/images/icons/phone-icon.png')}}" alt="">
                    <h6>Phone and Fax</h6>
                    <ol>
                        <li><a href="tel:+20222611181"><em>Mobile:</em> +202-266-11181</a></li>
                        <li><a href="tel:+20222611181"><em>Phone:</em> +202-266-11181</a></li>
                    </ol>
                </li>
                <li>
                    <img src="{{asset('app-assets/images/icons/email-website-icon.png')}}" alt="">
                    <h6>Email Address</h6>
                    <ol>
                        <li><a href="http://212solutions.net/">www.212solutions.net </a></li>
                        <li><a href="mailto:info@212solutions.net">info@212solutions.net</a></li>
                        <li><a href="mailto:info@212solutions.net">info@212solutions.net</a></li>
                    </ol>
                </li>
                <li>
                    <img src="{{asset('app-assets/images/icons/timming-icon.png')}}" alt=""/>
                    <h6>Our Timings</h6>
                    <p>@lang('general.sun') - @lang('general.thu'): 9 @lang('general.am') - 9 @lang('general.pm')</p>
                    <p>@lang('general.fri') - @lang('general.sat'): @lang('general.close')</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="contact-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 class="sub-heading-v2">Get In Touch</h6>
                                <h2 class="heading-v2">Send Us A Message</h2>
                                <p class="lead-text">Sed nec fermentum leo. Vestibulum pulvinar, risus quis mollis
                                    posuere, lorem lectus pretium turpis, non elementum eros metus ut purus. Morbi
                                    hendrerit molestie augue luctus euismod. </p>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-form">
                                    <form id="contact" name="contact" action="{{route('teacher.contact')}}"
                                          method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Full Name"
                                                           name="name" id="first-name" size="30" value=""
                                                           aria-required="true"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email"
                                                           pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                           placeholder="Email" name="email" id="email" size="30"
                                                           value="" aria-required="true"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Write Your Message ..."
                                                              id="message" aria-required="true"
                                                              name="message"></textarea>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-submit">
                                                    <input class="btn btn-secondary" id="submit-contact-form"
                                                           type="submit" name="submit" value="Send Message"/>
                                                </div>
                                            </div>
                                            <div id="success" class="d-none">
                                                <span>Your message was sent successfully! Our
                                                    team will contact you soon.</span>
                                            </div>

                                            <div id="error" class="d-none">
                                                <span>Something went wrong, try refreshing and
                                                    submitting the form again.</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Contact Us Section -->

@endsection

@push('scripts')
    <script>

        $(document).ready(function () {

        });

    </script>
@endpush
