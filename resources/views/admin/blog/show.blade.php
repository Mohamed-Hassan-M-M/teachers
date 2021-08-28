@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.blog') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.blog')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.blogs.index')}}">@lang('general.blog')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.show')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <div class="card-title">
                                    <div class="row">
                                        <div class="col s12 m6 l10">
                                            <h4 class="card-title">@lang('general.show') @lang('general.blog')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="col s12">
                                            <label for="date">@lang('blog.date')</label>
                                            <input class="" disabled value="{{$blog['date']}}" id="date"
                                                   name="date"
                                                   type="date">
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="title_{{$local}}">@lang('blog.name') (@lang('general.'.$local))</label>
                                                <input disabled value="{{old('title_'.$local, $blog['title_'.$local])}}" id="title_{{$local}}"
                                                       name="title_{{$local}}"
                                                       type="text">
                                            </div>
                                        @endforeach

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="description_{{$local}}">@lang('blog.description') (@lang('general.'.$local))</label>
                                                <input disabled value="{{old('description_'.$local, $blog['description_'.$local])}}" id="description_{{$local}}"
                                                       name="description_{{$local}}"
                                                       type="text">
                                            </div>
                                        @endforeach

                                        <div class="col s12">
                                            <img class="materialboxed" style="width: 50%; margin: auto" src="{{$blog->image_path}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
