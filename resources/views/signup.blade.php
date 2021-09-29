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
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teacher.about')}}">@lang('general.aboutUs')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('book.grid')}}">@lang('general.books')</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('event.grid')}}">@lang('general.events')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                        </li>
                        <li class="nav-item">
                            @if(app()->getLocale() == 'en')
                                <a class="nav-link"
                                   href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"> <i class="flag-icon flag-icon-eg"></i> @lang('general.arabic')</a>
                            @else
                                <a class="nav-link"
                                   href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"> <i class="flag-icon flag-icon-us"></i> @lang('general.english')</a>
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
                        <div class="header-login-btn">
                            <a href="{{route('register')}}" class="btn btn-light"><i class="fa fa-user"></i>
                                @lang('general.register')</a>
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
                            <a href="{{route('book.grid')}}">@lang('general.books')</a>
                        </li>
                        <li>
                            <a href="{{route('event.grid')}}">@lang('general.events')</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.contact.page')}}">@lang('general.contact')</a>
                        </li>
                        <li>
                            @if(app()->getLocale() == 'en')
                                <a
                                   href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"> <i class="flag-icon flag-icon-eg"></i> @lang('general.arabic')</a>
                            @else
                                <a
                                   href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"> <i class="flag-icon flag-icon-us"></i> @lang('general.english')</a>
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
                <h2>@lang('general.signup')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center"
                        @if(app()->getLocale() == 'ar') style="direction: rtl" @endif>
                        <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('general.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('general.signup')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Cart Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="signin-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="rounded"
                                     src="{{asset('app-assets/images/section-images/signin-pages-image.png')}}" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="signin-up-form">
                                    <h6 class="sub-heading-v2">@lang('general.reg1')Mo3allemy</h6>
                                    <h2 class="heading-v2">@lang('general.reg2')</h2>
                                    <em class="lead-text">@lang('general.reg3')</em>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="username">@lang('teacher.name')</label>
                                                <input type="text" class="form-control" id="username" required
                                                       name="username">
                                                @error('username')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="mobile">@lang('teacher.mobile')</label>
                                                <input type="number" class="form-control" id="mobile" required
                                                       name="mobile">
                                                @error('mobile')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">@lang('teacher.email')</label>
                                                <input type="email" class="form-control" id="inputEmail4" name="email">
                                                @error('email')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6 m-auto text-center">

                                                <input type="radio" value="male" class="" id="inputRadio" name="gender">
                                                <label for="inputRadio">@lang('general.male')</label>

                                                <input type="radio" value="female" class="" id="inputRadio2" name="gender">
                                                <label for="inputRadio2">@lang('general.female')</label>
                                                @error('gender')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword3">@lang('teacher.password')</label>
                                                <input type="password" class="form-control" id="inputPassword3" required
                                                       name="password">
                                                @error('password')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">@lang('general.confirmpassword')</label>
                                                <input type="password" class="form-control" id="inputPassword4" required
                                                       name="password_confirmation">
                                            </div>
                                        </div>
                                        <button type="submit"
                                                class="btn btn-secondary">@lang('general.register')</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Cart Section -->

@endsection

@push('scripts')
    <script>

        $(document).ready(function () {

        });

    </script>
@endpush
