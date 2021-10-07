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
                        <li class="nav-item active">
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
                <h2>@lang('general.books')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center"
                        @if(app()->getLocale() == 'ar') style="direction: rtl" @endif >
                        <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('general.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('general.books')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Book & Media Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-media-list">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12 col-lg-3">
                                <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                    <span data-toggle="collapse" data-target="#collapsefilter"
                                          aria-controls="collapsefilter" class="show-hide-filters"><img
                                            src="{{asset('app-assets/images/icons/hide-filter-icon.png')}}" alt=""> @lang('general.filters')</span>
                                    <div class="widget widget_related_search" data-accordion-group="">
                                        <div>
                                            <div class="single-data-accordion open" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.cat_book')</h5>
                                                <div class="widget_checkbox_list" data-content>
                                                    @foreach($subjects as $subject)
                                                        <div class="form-group">
                                                            <input value="{{$subject->id}}" type="checkbox" id="subsubject{{$subject->id}}"
                                                                   class="form-check-input subsubject">
                                                            <label class="form-check-label"
                                                                   for="subsubject{{$subject->id}}">{{$subject->name}}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="single-data-accordion" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.subcat_book')</h5>
                                                <div class="widget_checkbox_list" data-content id="subcat">

                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-md-12 col-lg-9">
                                <div class="books-media-listing-v3">
                                    <div class="row" id="books">
                                        @foreach($books as $book)
                                            <div class="col-md-6 col-lg-12">
                                                <div class="single-book-media">
                                                    <div class="book-thumb">
                                                        <img src="{{$book->image_path}}" style="width: 100%; height: 332px" alt="">
                                                    </div>
                                                    <div class="book-detail">
                                                        <h3 class="book-media-title"><a>{{$book->title}}</a></h3>
                                                        <div class="item-info">
                                                            <ul>
                                                                <li>
                                                                    @lang('book.author') <strong>{{$book->author}}</strong>
                                                                </li>
                                                                <li>
                                                                    @lang('book.date') <strong>{{$book->date}}</strong>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <p style="min-height: 100px; display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden; @if(app()->getLocale() == 'ar') font-size: 20px;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden; @endif " >{{$book->description}} </p>
                                                        <div class="card-links">
                                                            <a href="{{route('preview', $book->id)}}" class="btn btn-secondary">@lang('general.preview')</a>

                                                            <a href="{{route('download', $book->id)}}" class="btn btn-light"> @lang('general.download')</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="pagination">{{ $books->links() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Books & Media Section -->

@endsection

@push('scripts')
    <script>

        $(document).ready(function () {

            //get subSubject
            $('body').on('change', '.subsubject', function () {

                var recordIds = [];
                $.each($(".subsubject:checked"), function () {
                    recordIds.push($(this).val());
                });
                if (recordIds.length > 0) {
                    recordIds = JSON.stringify(recordIds);
                } else {
                    recordIds = 'empty'
                }
                var subcat = '';
                $.ajax({
                    url: "{{url('/') . '/get-subbook/'}}" + recordIds,
                    type: 'GET',
                    dataType: "json",
                    data: {},
                    success: function (data) {
                        data = data.data;
                        if (data.length != 0) {
                            for (var x = 0; x < data.length; x++) {
                                subcat += '<div class="form-group">';
                                subcat += '<input value="' + data[x]['id'] + '" type="checkbox" id="subject' + data[x]['id'] + '" class="form-check-input subject">';
                                subcat += '<label class="form-check-label" for="subject' + data[x]['id'] + '">' + data[x]['name'] + '</label>';
                                subcat += '</div>';
                            }
                            $("#subcat").html('');
                            $("#subcat").append(subcat);
                        } else {
                            $("#subcat").html('');
                        }
                    },
                    error: function (reject) {
                        console.log(reject);
                    }
                });

            });

            //get books
            $('body').on('change', '.subject', function () {

                var recordIds = [];
                $.each($(".subject:checked"), function () {
                    recordIds.push($(this).val());
                });
                if (recordIds.length > 0) {
                    recordIds = JSON.stringify(recordIds);
                } else {
                    recordIds = 'empty'
                }
                var books = '';
                $.ajax({
                    url: "{{url('/') . '/get-book/'}}" + recordIds,
                    type: 'GET',
                    dataType: "json",
                    data: {},
                    success: function (data) {
                        data = data.data;
                        if (data.length != 0) {
                            for (var x = 0; x < data.length; x++) {
                                books += '<div class="col-md-6 col-lg-12">';
                                books += '<div class="single-book-media">';
                                books += '<div class="book-thumb">';
                                books += '<img src="' + data[x]['image_path'] + '" style="width: 100%; height: 332px" alt="">';
                                books += '</div>';
                                books += '<div class="book-detail">';
                                books += '<h3 class="book-media-title"><a>' + data[x]['title'] + '</a></h3>';
                                books += '<div class="item-info">';
                                books += '<ul>';
                                books += '<li>';
                                books += '@lang('book.author') <strong>' + data[x]['author'] + '</strong>';
                                books += '</li>';
                                books += '<li>';
                                books += '@lang('book.date') <strong>' + data[x]['date'] + '</strong>';
                                books += '</li>';
                                books += '</ul>';
                                books += '</div>';
                                books += '<p style="min-height: 100px; display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden; @if(app()->getLocale() == "ar") font-size: 20px;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden; @endif " >' + data[x]['description'] + ' </p>';
                                books += '<div class="card-links">';
                                books += '<a href="{{url('/') . '/get-book-preview/'}}' + data[x]['id'] + '" class="btn btn-secondary">@lang('general.preview')</a>';
                                books += '<a href="{{url('/') . '/get-book-download/'}}' + data[x]['id'] + '" class="btn btn-light"> @lang('general.download')</a>';
                                books += '</div>';
                                books += '</div>';
                                books += '</div>';
                                books += '</div>';
                            }
                            $("#books").html('');
                            $("#books").append(books);
                        } else {
                            $("#books").html('');
                        }
                        $("#pagination").html('');
                    },
                    error: function (reject) {
                        console.log(reject);
                    }
                });

            });

        });//end for ready

    </script>
@endpush
