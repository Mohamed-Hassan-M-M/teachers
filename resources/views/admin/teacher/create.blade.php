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
                        <li class="breadcrumb-item active">@lang('general.create')
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
                                            <h4 class="card-title">@lang('general.create') @lang('general.teacher')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.teachers.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            @foreach(['ar', 'en'] as $local)
                                                <div class="input-field col s6">
                                                    <label for="name_{{$local}}">@lang('teacher.name') (@lang('general.'.$local))</label>
                                                    <input @error('name_'.$local)class="invalid" @enderror required value="{{old('name_'.$local)}}" id="name_{{$local}}"
                                                           name="name_{{$local}}"
                                                           type="text">
                                                    @error('name_'.$local)
                                                        <span class="red-text" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            @endforeach

                                            <div class="col s6">
                                                <label for="position">@lang('teacher.position')</label>
                                                <select id="position" name="position" required>
                                                    <option value="" disabled selected>@lang('general.choose') @lang('teacher.position')</option>
                                                    <option value="1">@lang('teacher.junior')</option>
                                                    <option value="2">@lang('teacher.senior')</option>
                                                    <option value="3">@lang('teacher.expert')</option>
                                                    <option value="4">@lang('teacher.great')</option>
                                                </select>
                                                <div class="input-field">
                                                </div>
                                                @error('position')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="input-field col s6">
                                                <label for="mobile">@lang('teacher.mobile')</label>
                                                <input @error('mobile')class="invalid" @enderror required value="{{old('mobile')}}" id="mobile"
                                                       name="mobile"
                                                       type="number">
                                                @error('mobile')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="input-field col s6">
                                                <label for="email">@lang('teacher.email')</label>
                                                <input @error('email')class="invalid" @enderror value="{{old('email')}}" id="email"
                                                       name="email"
                                                       type="email">
                                                @error('email')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="input-field col s6">
                                                <label for="password">@lang('teacher.password')</label>
                                                <input @error('password')class="invalid" @enderror required value="{{old('mobile')}}" id="password"
                                                       name="password"
                                                       type="password">
                                                @error('password')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            @foreach(['ar', 'en'] as $local)
                                                <div class="input-field col s12">
                                                    <label for="description_{{$local}}">@lang('teacher.description') (@lang('general.'.$local))</label>
                                                    <input @error('description_'.$local)class="invalid" @enderror value="{{old('description_'.$local)}}" id="description_{{$local}}"
                                                           name="description_{{$local}}"
                                                           type="text">
                                                    @error('description_'.$local)
                                                    <span class="red-text" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            @endforeach

                                            <div class="col s12">
                                                <label for="area_id">@lang('general.areas')</label>
                                                <div class="input-field">
                                                    <select id="area_id" name="area_id" class="select2 browser-default" multiple="multiple" required>
                                                        <option value="" disabled>@lang('general.choose') @lang('general.city')</option>
                                                        @foreach($areas as $area)
                                                            <option value="{{$area->id}}">{{$area->city->name}} -> {{$area->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('area_id')
                                                    <span class="red-text" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <label for="subject_id">@lang('general.subjects')</label>
                                                <div class="input-field">
                                                    <select id="subject_id" name="subject_id" class="select2 browser-default" multiple="multiple" required>
                                                        <option value="" disabled>@lang('general.choose') @lang('general.subject')</option>
                                                        @foreach($subjects as $subject)
                                                            <option value="{{$subject->id}}">{{$subject->classes->sector->type}} -> {{$subject->classes->sector->name}} -> {{$subject->classes->name}} -> {{$subject->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('subject_id')
                                                    <span class="red-text" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" class="validate">
                                                <label for="icon_prefix">Facebook</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" class="validate">
                                                <label for="icon_prefix">Facebook</label>
                                            </div>

                                            <div class="col s12">
                                                <input type="file" id="input-file-now" name="image" class="dropify" data-allowed-file-extensions="jpg jpeg png apng gif avif svg webp" />
                                                @error('image')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit"
                                                        name="action">@lang('general.create')
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
