@extends('layouts.app')

@section('content')
    <!-- Start: Header Section -->
    <header id="header" class="inner-navbar-wrapper navbar-wrapper">
        <button id="myBtn" title="Go to top"><span>&#8593;</span></button>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <h2>@lang('general.teacherList')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('general.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('general.teacher')</li>
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
                                    <span data-toggle="collapse" data-target="#collapsefilter" aria-controls="collapsefilter" class="show-hide-filters"><img
                                            src="{{asset('app-assets/images/icons/hide-filter-icon.png')}}" alt=""> @lang('general.filters')</span>
                                    <div class="widget widget_related_search" data-accordion-group="">
                                        <div>
                                            <div class="single-data-accordion open" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('sector.type')</h5>
                                                <div class="widget_checkbox_list" data-content>
                                                    <div class="form-group">
                                                        <input value="1" type="checkbox" id="type1" class="form-check-input type">
                                                        <label class="form-check-label" for="type1">@lang('sector.governmental')</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input value="2" id="type2" type="checkbox" class="form-check-input type">
                                                        <label class="form-check-label" for="type2">@lang('sector.special')</label>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="single-data-accordion" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.sector')</h5>
                                                <div class="widget_checkbox_list" id="sectors" data-content>

                                                </div>
                                            </div>
                                            <div class="single-data-accordion" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.class')</h5>
                                                <div class="widget_checkbox_list" id="classes" data-content>

                                                </div>
                                            </div>
                                            <div class="single-data-accordion" data-accordion>
                                                <h5 class="widget-sub-title" data-control>@lang('general.subject')</h5>
                                                <div class="widget_checkbox_list" id="subjects" data-content>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </aside>
                            </div>
                            <div class="col-md-12 col-lg-9">
                                <div class="books-media-header">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mb-0">
                                                        <div class="select">
                                                            <select name="city_id" id="city_id" class="form-control">
                                                                <option value="" dType="city">@lang('general.all') @lang('general.cities')</option>
                                                                @foreach($cities as $city)
                                                                    <option value="{{$city->id}}" dType="city">{{$city->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-0" id="area">
                                                        <div class="select">
                                                            <select name="area_id" id="area_id" class="form-control">
                                                                <option value="">@lang('general.all') @lang('general.areas')</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="books-media-listing">
                                    <div class="row" id="teachers">
                                        @foreach($teachers as $teacher)
                                            <div class="col-sm-6 col-lg-6 col-xl-4">
                                                <div class="single-book-media">
                                                    <div class="book-thumb" style="height: 250px">
                                                        <img src="{{$teacher->image_path}}" class="w-100 h-100" alt="">
                                                    </div>
                                                    <div class="book-detail">
                                                        <div class="mb-2">
                                                            <div class="rating">
                                                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                            </div>
                                                        </div>
                                                        <h3 class="book-media-title"><a href="#">{{$teacher->name}}</a></h3>
                                                        <p><strong>@lang('general.phone'):</strong> {{$teacher->mobile}}</p>
                                                        <div class="card-links">
                                                            <a href="{{route('teacher.page', $teacher->id)}}" class="btn btn-primary"> @lang('general.read_more')</a>
                                                            <a href="{{route('teacher.page', $teacher->id)}}" class="read-more"><img
                                                                    src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="pagination">{{ $teachers->links() }}</div>
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

        $( document ).ready(function() {

            //get area
            $('body').on('mouseup', 'li[dtype="city"]', function() {
                var city = $(this).attr('rel');
                $("#area").html("");
                $("#area").html(
                    '<select name="area_id" id="area_id" class="form-control"><option value="" dType="areas">' + "@lang('general.all') @lang('general.areas')" + '</option>'
                );

                let areas = "";
                if (city) {
                    $.ajax({
                        url: "{{url('/') . '/get-area/'}}" + city,
                        type: 'GET',
                        dataType: "json",
                        data: {},
                        success: function (data){
                            data = data.data;
                            if (data.length != 0) {
                                for (var x = 0; x < data.length; x++) {
                                    var item = data[x];
                                    areas +=
                                        '<option dType="areas" value="' +
                                        item.id +
                                        '">' +
                                        item['name_{{app()->getLocale()}}'] +
                                        "</option>";
                                }
                                $("#area_id").append(areas);
                                $("#area").append('</select>');
                                var selectObj = $('select#area_id');
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
                                $("#area").append('</select>');
                                var selectObj = $('select#area_id');
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
            });//end for get area

            //check type and get sectors
            $('body').on('change', '.type', function (){
                if($(this).prop('checked') == true){
                    $('.type').prop('checked', false);
                    $(this).prop('checked', true);

                    //clear all
                    $('#sectors').html('');
                    $('#classes').html('');
                    $('#subjects').html('');

                    var type = $(this).val();
                    let sectors = '';
                    if (type) {
                        $.ajax({
                            url: "{{url('/') . '/get-sector/'}}" + type,
                            type: 'GET',
                            dataType: "json",
                            data: {},
                            success: function (data){
                                data = data.data;
                                if (data.length != 0) {
                                    for (var x = 0; x < data.length; x++) {
                                        var item = data[x];
                                        sectors += '<div class="form-group">';
                                        sectors += '<input type="checkbox" class="form-check-input sector" value="'
                                            + item.id + '" id="sector' + item.id + '">';
                                        sectors += '<label class="form-check-label" for="sector'+ item.id +'">'
                                            + item['name_{{app()->getLocale()}}'] + '</label>';
                                        sectors += '</div>'
                                    }
                                    $("#sectors").append(sectors);
                                }
                            },
                            error: function (reject){
                                console.log(reject);
                            }
                        });
                    }
                }
            });

            //check sector and get classes
            $('body').on('change', '.sector', function (){
                if($(this).prop('checked') == true){
                    $('.sector').prop('checked', false);
                    $(this).prop('checked', true);

                    //clear all
                    $('#classes').html('');
                    $('#subjects').html('');

                    var sector = $(this).val();
                    let classes = '';
                    if (sector) {
                        $.ajax({
                            url: "{{url('/') . '/get-class/'}}" + sector,
                            type: 'GET',
                            dataType: "json",
                            data: {},
                            success: function (data){
                                data = data.data;
                                if (data.length != 0) {
                                    for (var x = 0; x < data.length; x++) {
                                        var item = data[x];
                                        classes += '<div class="form-group">';
                                        classes += '<input type="checkbox" class="form-check-input class" value="'
                                            + item.id + '" id="class' + item.id + '">';
                                        classes += '<label class="form-check-label" for="class'+ item.id +'">'
                                            + item['name_{{app()->getLocale()}}'] + '</label>';
                                        classes += '</div>'
                                    }
                                    $("#classes").append(classes);
                                }
                            },
                            error: function (reject){
                                console.log(reject);
                            }
                        });
                    }


                }
            });

            //check class and get subjects
            $('body').on('change', '.class', function (){
                if($(this).prop('checked') == true){
                    $('.class').prop('checked', false);
                    $(this).prop('checked', true);

                    //clear all
                    $('#subjects').html('');

                    var classe = $(this).val();
                    let subjects = '';
                    if (classe) {
                        $.ajax({
                            url: "{{url('/') . '/get-subject/'}}" + classe,
                            type: 'GET',
                            dataType: "json",
                            data: {},
                            success: function (data){
                                data = data.data;
                                if (data.length != 0) {
                                    for (var x = 0; x < data.length; x++) {
                                        var item = data[x];
                                        subjects += '<div class="form-group">';
                                        subjects += '<input type="checkbox" class="form-check-input subject" value="'
                                            + item.id + '" id="subject' + item.id + '">';
                                        subjects += '<label class="form-check-label" for="subject'+ item.id +'">'
                                            + item['name_{{app()->getLocale()}}'] + '</label>';
                                        subjects += '</div>'
                                    }
                                    $("#subjects").append(subjects);
                                }
                            },
                            error: function (reject){
                                console.log(reject);
                            }
                        });
                    }


                }
            });

            //get teachers
            $('body').on('change', '.subject', function (){

                var recordIds = [];
                $.each($(".subject:checked"), function () {
                    recordIds.push($(this).val());
                });
                if (recordIds.length > 0){
                    recordIds = JSON.stringify(recordIds);
                }
                else {
                    recordIds = 'empty'
                }
                var area = 'empty';
                if($('#area_id').val()){
                    area = $('#area_id').val();
                }
                var teachers = '';
                $.ajax({
                    url: "{{url('/') . '/get-teacher/'}}" + area + '/' + recordIds,
                    type: 'GET',
                    dataType: "json",
                    data: {},
                    success: function (data){
                        data = data.data;
                        if (data.length != 0) {
                            for (var x = 0; x < data.length; x++) {
                                var item = data[x];
                                teachers += '<div class="col-sm-6 col-lg-6 col-xl-4">';
                                teachers += '<div class="single-book-media">';
                                teachers += '<div class="book-thumb" style="height: 250px">';
                                teachers += '<img src="'
                                    + item['image_path'] + '" class="w-100 h-100" alt="">';
                                teachers += '</div>';
                                teachers += '<div class="book-detail">';
                                teachers += '<div class="mb-2">';
                                teachers += '<div class="rating">';
                                teachers += '<input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>';
                                teachers += '<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>';
                                teachers += '<input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>';
                                teachers += '<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>';
                                teachers += '<input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>';
                                teachers += '<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>';
                                teachers += '<input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>';
                                teachers += '<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>';
                                teachers += '<input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>';
                                teachers += '<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '<h3 class="book-media-title"><a href="#">'
                                    + item['name_{{app()->getLocale()}}'] + '</a></h3>';
                                teachers += '<p><strong>@lang('general.phone'):</strong> '
                                    + item['mobile'] + '</p>';
                                teachers += '<div class="card-links">';
                                teachers += '<a href="{{url('/' . '/teacher/')}}' + item['id'] + '" class="btn btn-primary"> @lang('general.read_more')</a>';
                                teachers += '<a href="{{url('/' . '/teacher/')}}' + item['id'] + '" class="read-more"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '</div>';
                            }
                            $("#teachers").html('');
                            $("#teachers").append(teachers);
                        }else {
                            $("#teachers").html('');
                        }
                        $("#pagination").html('');
                    },
                    error: function (reject){
                        console.log(reject);
                    }
                });

            });

            //get area
            $('body').on('mouseup', 'li[dtype="areas"]', function() {
                var recordIds = [];
                $.each($(".subject:checked"), function () {
                    recordIds.push($(this).val());
                });
                if(recordIds.length > 0){
                    recordIds = JSON.stringify(recordIds);
                }
                else {
                    recordIds = 'empty'
                }
                var area = $(this).attr('rel');
                var teachers = '';
                $.ajax({
                    url: "{{url('/') . '/get-teacher/'}}" + area + '/' + recordIds,
                    type: 'GET',
                    dataType: "json",
                    data: {},
                    success: function (data){
                        data = data.data;
                        if (data.length != 0) {
                            for (var x = 0; x < data.length; x++) {
                                var item = data[x];
                                teachers += '<div class="col-sm-6 col-lg-6 col-xl-4">';
                                teachers += '<div class="single-book-media">';
                                teachers += '<div class="book-thumb" style="height: 250px">';
                                teachers += '<img src="'
                                    + item['image_path'] + '" class="w-100 h-100" alt="">';
                                teachers += '</div>';
                                teachers += '<div class="book-detail">';
                                teachers += '<div class="mb-2">';
                                teachers += '<div class="rating">';
                                teachers += '<input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>';
                                teachers += '<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>';
                                teachers += '<input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>';
                                teachers += '<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>';
                                teachers += '<input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>';
                                teachers += '<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>';
                                teachers += '<input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>';
                                teachers += '<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>';
                                teachers += '<input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>';
                                teachers += '<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '<h3 class="book-media-title"><a href="#">'
                                    + item['name_{{app()->getLocale()}}'] + '</a></h3>';
                                teachers += '<p><strong>@lang('general.phone'):</strong> '
                                    + item['mobile'] + '</p>';
                                teachers += '<div class="card-links">';
                                teachers += '<a href="{{url('/' . '/teacher/')}}' + item['id'] + '" class="btn btn-primary"> @lang('general.read_more')</a>';
                                teachers += '<a href="{{url('/' . '/teacher/')}}' + item['id'] + '" class="read-more"><img src="{{asset('app-assets/images/link-arrow.png')}}" alt=""></a>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '</div>';
                                teachers += '</div>';
                            }
                            $("#teachers").html('');
                            $("#teachers").append(teachers);
                        }else {
                            $("#teachers").html('');
                        }
                        $("#pagination").html('');
                    },
                    error: function (reject){
                        console.log(reject);
                    }
                });
            });//end for get area

        });//end for ready

    </script>
@endpush
