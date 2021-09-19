@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.teacher') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.teacher')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.teachers.index')}}">@lang('general.teacher')</a>
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
                                            <h4 class="card-title">@lang('general.show') @lang('general.teacher')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="name_{{$local}}">@lang('teacher.name') (@lang('general.'.$local))</label>
                                                <input value="{{$teacher['name_'.$local]}}" id="name_{{$local}}"
                                                       name="name_{{$local}}"
                                                       type="text" disabled>
                                            </div>
                                        @endforeach

                                        <div class="col s6">
                                            <label for="position">@lang('teacher.position')</label>
                                            <select id="position" name="position" disabled>
                                                <option value="" selected>{{$teacher->position}}</option>
                                            </select>
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="mobile">@lang('teacher.mobile')</label>
                                            <input value="{{$teacher['mobile']}}" id="mobile"
                                                   name="mobile"
                                                   type="number" disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="email">@lang('teacher.email')</label>
                                            <input value="{{$teacher['email']}}" id="email"
                                                   name="email"
                                                   type="email" disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="password">@lang('teacher.password')</label>
                                            <input value="{{$teacher['password']}}" id="password"
                                                   name="password"
                                                   type="password" disabled>
                                        </div>

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s12">
                                                <label for="description_{{$local}}">@lang('teacher.description') (@lang('general.'.$local))</label>
                                                <input value="{{$teacher['description_'.$local]}}" id="description_{{$local}}"
                                                       name="description_{{$local}}"
                                                       type="text" disabled>
                                            </div>
                                        @endforeach

                                        <div class="col s12">
                                            <label for="area_id">@lang('general.areas')</label>
                                            <div class="input-field">
                                                <select id="area_id" name="area_id[]" class="select2 browser-default" multiple="multiple" disabled>
                                                    @foreach($teacher->areas as $area)
                                                        <option value="" selected>{{$area->city->name}} -> {{$area->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col s12">
                                            <label for="subject_id">@lang('general.subjects')</label>
                                            <div class="input-field">
                                                <select id="subject_id" name="subject_id[]" class="select2 browser-default" multiple="multiple" disabled>
                                                    @foreach($teacher->subjects as $subject)
                                                        <option value="" selected>{{$subject->classes->sector->type}} -> {{$subject->classes->sector->name}} -> {{$subject->classes->name}} -> {{$subject->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        @foreach($teacher->socialLink as $social)
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">send</i>
                                                <input value="{{$social->social_link}}" type="url" name="social_link[]" disabled>
                                            </div>
                                        @endforeach

                                        <div class="col s12">
                                            <img class="materialboxed" style="width: 50%; margin: auto" src="{{$teacher->image_path}}">
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
