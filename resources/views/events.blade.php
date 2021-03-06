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
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('book.grid')}}">@lang('general.books')</a>
                        </li>
                        <li class="nav-item active">
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
                <h2>@lang('general.eventsnews')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center"
                        @if(app()->getLocale() == 'ar') style="direction: rtl" @endif>
                        <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('general.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('general.eventsnews')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="main-news-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <aside id="secondary" class="sidebar widget-area">
                                    <div class="widget widget_categories">
                                        <h3 class="widget-title">@lang('general.cat_events')</h3>
                                        <ul>
                                            @foreach($categories as $category)
                                                <li><a href="{{route('event.grid', $category->id)}}">{{$category->name}}</a> <span>({{$category->count()}})</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="widget widget_blog_post">
                                        <h3 class="widget-title">@lang('general.popularEvent')</h3>
                                        <ul>
                                            @foreach($populars as $popular)
                                                <li>
                                                    <span class="widget-thumb">
                                                        <a href="{{route('event.page', $popular->id)}}"><img src="{{$popular->image_path}}"
                                                                                                             alt="widget thumb"></a>
                                                    </span>
                                                    <div class="widget-post-data">
                                                        <small>{{$popular->date}}</small>
                                                        <h4><a href="{{route('event.page', $popular->id)}}">{{$popular->title}}</a></h4>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-12 col-lg-8 news-events-list-view">
                                <div class="news-list-box">
                                    <div class="row">
                                        @foreach($events as $event)
                                            <div class="col-md-6">
                                                <div class="single-news-list">
                                                    <figure>
                                                        <a href="{{route('event.page', $event->id)}}"><img
                                                                src="{{$event->image_path}}" style="height: 378px;"
                                                                alt="News &amp; Event"></a>
                                                    </figure>
                                                    <div class="content-block">
                                                        <div class="event-detail">
                                                        <span class="event-date">
                                                            <strong>{{\Carbon\Carbon::parse($event->date)->format('d')}}</strong>
                                                            {{\Carbon\Carbon::parse($event->date)->format('M')}}
                                                        </span>
                                                            <div class="news-event-info">
                                                                <ul>

                                                                    <li>
                                                                        @foreach($event->areas as $area)
                                                                            <a>
                                                                                <i class="fa fa-map-marker"></i>
                                                                                {{$area->city->name}} , {{$area->name}}
                                                                            </a>
                                                                        @endforeach
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <h3 class="news-event-title"><a href="{{route('event.page', $event->id)}}">{{$event->title}}</a></h3>
                                                        <p>{{$event->description}}</p>
                                                        <a class="link" href="{{route('event.page', $event->id)}}"><img
                                                                src="images/link-arrow.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div id="pagination">{{ $events->links() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

@endsection

@push('scripts')
    <script>

        $(document).ready(function () {

        });

    </script>
@endpush
