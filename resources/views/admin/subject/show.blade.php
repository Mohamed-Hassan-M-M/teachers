@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.subject') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('app-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.subject')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.subjects.index')}}">@lang('general.subject')</a>
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
                                            <h4 class="card-title">@lang('general.show') @lang('general.subject')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="col s12">
                                            <label for="class_id">@lang('general.classes')</label>
                                            <select id="class_id" name="class_id" disabled>
                                                <option selected >{{$subject->classes->sector->type}} -> {{$subject->classes->sector->name}} -> {{$subject->classes->name}}</option>
                                            </select>
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="name_{{$local}}">@lang('subject.name') (@lang('general.'.$local))</label>
                                                <input value="{{$subject['name_'.$local]}}" id="name_{{$local}}"
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
