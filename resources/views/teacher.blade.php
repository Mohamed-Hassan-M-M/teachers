@extends('layouts.app')

@section('content')

    <!-- Start: Header Section -->
    <header id="header" class="inner-navbar-wrapper navbar-wrapper">
        <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
        <div class="container-fluid">
            <nav @if(app()->getLocale() == 'ar') style="direction: rtl" @endif class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('app-assets/images/logo-header-v1.png')}}" alt="Skille" />
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
                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.aboutUs')</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.events')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teacher.grid')}}">@lang('general.contact')</a>
                        </li>
                        <li class="nav-item">
                            @if(app()->getLocale() == 'en')
                                <a class="nav-link" style="text-decoration: underline;text-transform: lowercase" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">@lang('general.arabic')</a>
                            @else
                                <a class="nav-link" style="text-decoration: underline;text-transform: lowercase" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">@lang('general.english')</a>
                            @endif

                        </li>
                    </ul>
                    <div class="header-login-btn">
                        <a href="" class="btn btn-light"><i class="fa fa-user"></i>
                            @lang('general.login')</a>
                    </div>
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
                            <a href="{{route('teacher.grid')}}">@lang('general.aboutUs')</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.grid')}}">@lang('general.events')</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.grid')}}">@lang('general.contact')</a>
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
            <!-- Mobile Navigation End-->
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Page Banner -->
    <section class="inner-page-banner">
        <div class="container">
            <div class="banner-header">
                <h2>@lang('general.teacherDetail')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" @if(app()->getLocale() == 'ar') style="direction: rtl" @endif>
                        <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('general.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('general.teacherDetail')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Blog Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="blog-main-list blog-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mb-4 mb-md-0">
                                <div class="blog-detail">
                                    <div class="single-blog-post">
                                        <div class="blog-content pt-5">
                                            <div class="blog-user-info" style="align-items: flex-start; @if(app()->getLocale() == 'ar') justify-content: right; @endif ">
                                                <div style=" @if(app()->getLocale() == 'en') margin-right: 15px; @else margin-left: 15px; @endif display: flex; flex-direction: column">
                                                    <img class="rounded m-0" style="width: 200px; height: 200px;" src="{{$teacher->image_path}}" alt="">
                                                    <div class="text-center">
                                                        <div class="rating">
                                                            @php
                                                            $intRate = intVal($teacher->rating);
                                                            $half = false;
                                                            if($intRate < $teacher->rating){
                                                                $half = true;
                                                            }
                                                            @endphp
                                                            @for($i = 0; $i < $intRate; $i++)
                                                                <i class="fa fa-star" style="color: gold"></i>
                                                            @endfor
                                                            @if($half)
                                                                <i class="fa fa-star-half-full" style="color: gold"></i>
                                                                @for($i = 0; $i < (4-$intRate); $i++)
                                                                    <i class="fa fa-star"></i>
                                                                @endfor
                                                            @else
                                                                @for($i = 0; $i < (5-$intRate); $i++)
                                                                    <i class="fa fa-star"></i>
                                                                @endfor
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <ul class="m-auto">
                                                        <li><a href="#"><i class="fa fa-comment"></i> 37</a></li>
                                                        <li><a href="#"><i class="fa fa-thumbs-up"></i> 110</a></li>
                                                    </ul>
                                                </div>

                                                <div style="display: flex; flex-direction: column">
                                                    <span>
                                                        <strong style="font-size: 20px;">{{$teacher->name}}</strong>
                                                        <small>@lang('teacher.position'): @lang('general.teacher') {{$teacher->position}}</small>
                                                    </span>
                                                    <p>{{$teacher['description_'.app()->getLocale()]}}</p>
                                                    <ul>
                                                        @foreach($teacher->socialLink as $social)
                                                            <li><a href="{{$social->social_link}}"><i class="fa @if(strpos($social->social_link, 'facebook')) fa-facebook @elseif(strpos($social->social_link, 'google')) fa-google-plus @elseif(strpos($social->social_link, 'youtube')) fa-youtube-play @endif"></i></a></li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="detail-page-cat">
                                                        <a>@lang('general.sectors')</a>
                                                        <ul class="mr-2 ml-2">
                                                            @foreach($sectors as $sector)
                                                                <li class="p-0 d-inline-block"><b>{{$sector->name}}</b></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="detail-page-cat">
                                                        <a>@lang('general.classes')</a>
                                                        <ul class="mr-2 ml-2">
                                                            @foreach($classes as $class)
                                                                <li class="p-0 d-inline-block"><b>{{$class->name}}</b></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="detail-page-cat">
                                                        <a>@lang('general.subjects')</a>
                                                        <ul class="mr-2 ml-2">
                                                            @foreach($subjects as $subject)
                                                                <li class="p-0 d-inline-block"><b>{{$subject->name}}</b></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <strong>@lang('general.teacherLocations')</strong>
                                    <ul class="arrow-listing">
                                        @foreach($teacher->areas as $area)
                                        <li> {{$area->city->name}} - {{$area->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="comments-area" id="comments">
                                    <div class="comment-bg">
                                        <small class="comment-small-heading">@lang('general.feedback')</small>
                                        <h4 class="comments-title">People’s Coments
                                        </h4>
                                        <ol class="comment-list">
                                            <li class="comment parent">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard">
                                                        <img src="{{asset('app-assets/images/blog/blog-comment-01.png')}}" alt="Comment Author">
                                                    </div>
                                                    <footer class="comment-meta">
                                                        <div class="comment-metadata">
                                                            <b class="fn">
                                                                <a class="url" href="#">Rachael Towers</a>
                                                            </b>
                                                            <div class="comment-rating">
                                                                <div class="rating">
                                                                    <span>☆</span>
                                                                    <span>☆</span>
                                                                    <span>☆</span>
                                                                    <span>☆</span>
                                                                    <span>☆</span>
                                                                </div>
                                                                <a href="#">
                                                                    <time datetime="2016-01-17">
                                                                        <b>Nov 20, 2020</b>
                                                                    </time>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Vestibulum hendrerit tortor vel nunc dapibus egestas. Etiam et aliquam urna, at lacinia metus. Vestibulum iaculis libero eu dui tristique viverra. Ut sit amet interdum enim. Nam quam felis, egestas
                                                                id ipsum vel, bibendum tempor metus. Donec tristique purus nec orci tempus, sit amet consectetur.
                                                            </p>
                                                        </div>
                                                    </footer>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="comment-respond" id="respond">
                                        <h4 class="comments-title">Write Your Comment</h4>
                                        <form class="comment-form" id="commentform" method="post" action="blog-detail.html">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="comment-form-author input-required">
                                                        <input name="author" id="author" type="text" placeholder="Your Name">
                                                    </p>
                                                    <p class="comment-form-email input-required">
                                                        <input name="email" id="email" type="email" placeholder="Your Email">
                                                    </p>
                                                    <p class="form-submit d-none d-md-block">
                                                        <input value="POST YOUR COMMENT" class="submit" id="submit" name="submit" type="submit">
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="comment-form-comment">
                                                        <textarea name="comment" id="comment" placeholder="Your review"></textarea>
                                                    </p>
                                                    <p class="form-submit d-md-none">
                                                        <input value="POST YOUR COMMENT" class="submit" id="submit1" name="submit" type="submit">
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Blog Section -->

@endsection

@push('scripts')
    <script>

        $( document ).ready(function() {

        });

    </script>
@endpush
