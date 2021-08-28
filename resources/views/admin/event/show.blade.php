@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.event') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.event')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.events.index')}}">@lang('general.event')</a>
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
                                            <h4 class="card-title">@lang('general.show') @lang('general.event')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="col s6">
                                            <label for="category_id">@lang('general.cat_event')</label>
                                            <select id="category_id" name="category_id" disabled>
                                                <option value="" selected>{{$event->category->name}}</option>
                                            </select>
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        <div class="col s6">
                                            <label for="date">@lang('event.date')</label>
                                            <input class="" disabled value="{{$event['date']}}" id="date"
                                                   name="date"
                                                   type="date">
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="title_{{$local}}">@lang('event.name') (@lang('general.'.$local))</label>
                                                <input disabled value="{{old('title_'.$local, $event['title_'.$local])}}" id="title_{{$local}}"
                                                       name="title_{{$local}}"
                                                       type="text">
                                            </div>
                                        @endforeach

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="description_{{$local}}">@lang('event.description') (@lang('general.'.$local))</label>
                                                <input disabled value="{{old('description_'.$local, $event['description_'.$local])}}" id="description_{{$local}}"
                                                       name="description_{{$local}}"
                                                       type="text">
                                            </div>
                                        @endforeach

                                        <div class="col s12">
                                            <label for="area_id">@lang('general.areas')</label>
                                            <div class="input-field">
                                                <select id="area_id" name="area_id[]" class="select2 browser-default" multiple="multiple" disabled>
                                                    @foreach($event->areas as $area)
                                                        <option value="" selected>{{$area->city->name}} -> {{$area->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col s12">
                                            <img class="materialboxed" style="width: 50%; margin: auto" src="{{$event->image_path}}">
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
