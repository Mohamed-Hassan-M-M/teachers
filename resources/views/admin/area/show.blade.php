@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.area') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('app-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.area')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.areas.index')}}">@lang('general.area')</a>
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
                                            <h4 class="card-title">@lang('general.show') @lang('general.area')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="col s12">
                                            <label for="city_id">@lang('general.city')</label>
                                            <select id="city_id" name="city_id" disabled>
                                                <option selected>{{$area->city->name}}</option>
                                            </select>
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="name_{{$local}}">@lang('area.name') (@lang('general.'.$local))</label>
                                                <input value="{{$area['name_'.$local]}}" id="name_{{$local}}"
                                                       name="name_{{$local}}"
                                                       type="text"
                                                       disabled>
                                            </div>
                                        @endforeach

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
