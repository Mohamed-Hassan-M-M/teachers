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
                        <li class="nav-item active">
                            <a class="nav-link active" href="{{route('teacher.grid')}}">@lang('general.teachers')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('book.grid')}}">@lang('general.books')</a>
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
                <h2>@lang('general.teacherDetail')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center"
                        @if(app()->getLocale() == 'ar') style="direction: rtl" @endif>
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
                                            <div class="blog-user-info"
                                                 style="align-items: flex-start; @if(app()->getLocale() == 'ar') justify-content: right; @endif ">
                                                <div
                                                    style=" @if(app()->getLocale() == 'en') margin-right: 15px; @else margin-left: 15px; @endif display: flex; flex-direction: column">
                                                    <img class="rounded m-0" style="width: 200px; height: 200px;"
                                                         src="{{$teacher->image_path}}" alt="">
                                                    <div class="text-center">
                                                        <div class="rating m-auto">
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
                                                        @foreach($teacher->socialLink as $social)
                                                            <li><a href="{{$social->social_link}}"><i
                                                                        class="fa @if(strpos($social->social_link, 'facebook')) fa-facebook @elseif(strpos($social->social_link, 'google')) fa-google-plus @elseif(strpos($social->social_link, 'youtube')) fa-youtube-play @endif"></i></a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                <div style="display: flex; flex-direction: column">
                                                    <span>
                                                        <strong style="font-size: 20px;">{{$teacher->name}}</strong>
                                                        <small>@lang('teacher.position'): @lang('general.teacher') {{$teacher->position}}</small>
                                                    </span>
                                                    <p>{{$teacher['description_'.app()->getLocale()]}}</p>
                                                    <div class="detail-page-cat">
                                                        <a>@lang('general.sectors')</a>
                                                        <ul class="mr-2 ml-2">
                                                            @foreach($sectors as $sector)
                                                                <li class="p-0 d-inline-block"><b>{{$sector->name}}</b>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="detail-page-cat">
                                                        <a>@lang('general.classes')</a>
                                                        <ul class="mr-2 ml-2">
                                                            @foreach($classes as $class)
                                                                <li class="p-0 d-inline-block"><b>{{$class->name}}</b>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="detail-page-cat">
                                                        <a>@lang('general.subjects')</a>
                                                        <ul class="mr-2 ml-2">
                                                            @foreach($subjects as $subject)
                                                                <li class="p-0 d-inline-block"><b>{{$subject->name}}</b>
                                                                </li>
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
                                    @if($teacher->reviews->count() > 0)
                                        <div class="comment-bg">
                                            <small class="comment-small-heading">@lang('general.feedback')</small>
                                            <h4 class="comments-title">@lang('general.peocomment')
                                            </h4>
                                            <ol class="comment-list">
                                                @foreach($teacher->reviews as $review)
                                                    <li class="comment parent">
                                                        <div class="comment-body">
                                                            <div class="comment-author vcard">
                                                                <img
                                                                    @if($review->student->gender == 'male') src="{{asset('app-assets/images/man.png')}}" @else src="{{asset('app-assets/images/woman.png')}}" @endif
                                                                alt="Comment Author">
                                                            </div>
                                                            <footer class="comment-meta">
                                                                <div class="comment-metadata">
                                                                    <b class="fn">
                                                                        <a class="url">{{$review->student->username}}</a>
                                                                    </b>
                                                                    <div class="comment-rating">
                                                                        <a>
                                                                            <time datetime="2016-01-17">
                                                                                <b>{{$review->created_at}}</b>
                                                                            </time>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-content">
                                                                    <p>{{$review->message}}
                                                                    </p>
                                                                </div>
                                                            </footer>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    @endif
                                    @if(auth()->check() && auth()->user()->type == '3')
                                        <div class="comment-respond" id="respond">
                                            <h4 class="comments-title">@lang('general.writecomment')</h4>
                                            @if (\Session::has('success'))
                                                <div class="alert alert-success text-center">{!! \Session::get('success') !!}</div>
                                            @endif
                                            <form class="comment-form" id="commentform" method="post"
                                                  action="{{route('review')}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <fieldset class="rating" dir="ltr">
                                                            <input type="radio" id="star5" name="rating" value="5"/>
                                                            <label class="full" for="star5"
                                                                   title="Awesome - 5 stars"></label>
                                                            <input type="radio" id="star4half" name="rating"
                                                                   value="4.5"/><label class="half" for="star4half"
                                                                                       title="Pretty good - 4.5 stars"></label>
                                                            <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label> <input type="radio"
                                                                                                              id="star3half"
                                                                                                              name="rating"
                                                                                                              value="3.5"/><label
                                                                class="half" for="star3half"
                                                                title="Meh - 3.5 stars"></label> <input type="radio"
                                                                                                        id="star3"
                                                                                                        name="rating"
                                                                                                        value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                            <input type="radio" id="star2half" name="rating"
                                                                   value="2.5"/><label class="half" for="star2half"
                                                                                       title="Kinda bad - 2.5 stars"></label>
                                                            <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label> <input type="radio"
                                                                                                            id="star1half"
                                                                                                            name="rating"
                                                                                                            value="1.5"/><label
                                                                class="half" for="star1half"
                                                                title="Meh - 1.5 stars"></label> <input type="radio"
                                                                                                        id="star1"
                                                                                                        name="rating"
                                                                                                        value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label> <input type="radio"
                                                                                                                id="starhalf"
                                                                                                                name="rating"
                                                                                                                value="0.5"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                        </fieldset>
                                                        <p class="comment-form-comment">
                                                        <textarea name="message" id="comment"
                                                                  placeholder="@lang('general.yreview')" required></textarea>
                                                        </p>
                                                        <input type="hidden" id="rate" name="rate">
                                                        <input type="hidden" id="teacher_id" name="teacher_id" value="{{$teacher->id}}">
                                                        <p class="form-submit d-md-none">
                                                            <input value="@lang('general.post')" class="submit" id="submit1"
                                                                   name="submit" type="submit">
                                                        </p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p class="form-submit d-none d-md-block">
                                                            <input value="@lang('general.post')" class="submit" id="submit"
                                                                   name="submit" type="submit">
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    @endif
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

        $(document).ready(function(){

            $("input[type='radio']").click(function(){
                var sim = $("input[type='radio']:checked").val();
                $('#rate').val(sim);
            });
        });

    </script>
@endpush
