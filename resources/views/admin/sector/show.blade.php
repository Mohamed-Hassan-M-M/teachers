@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.sector') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.sector')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.sectors.index')}}">@lang('general.sector')</a>
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
                                            <h4 class="card-title">@lang('general.show') @lang('general.sector')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="col s12">
                                            <p>@lang('sector.type')</p>
                                            <label>
                                                <input disabled name="type" type="radio" @if($sector->type == __('sector.governmental')) checked @endif />
                                                <span>@lang('sector.governmental')</span>
                                            </label>
                                            <label>
                                                <input disabled name="type" type="radio" @if($sector->type == __('sector.special')) checked @endif />
                                                <span>@lang('sector.special')</span>
                                            </label>
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="name_{{$local}}">@lang('sector.name') (@lang('general.'.$local))</label>
                                                <input value="{{$sector['name_'.$local]}}" id="name_{{$local}}"
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
