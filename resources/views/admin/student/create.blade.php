@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.student') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.student')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.students.index')}}">@lang('general.student')</a>
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
                                            <h4 class="card-title">@lang('general.create') @lang('general.student')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.students.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <label for="username">@lang('teacher.name')</label>
                                                <input @error('username')class="invalid" @enderror required value="{{old('username')}}" id="username"
                                                       name="username"
                                                       type="text">
                                                @error('username')
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
                                                <input @error('password')class="invalid" @enderror required value="" id="password"
                                                       name="password"
                                                       type="password">
                                                @error('password')
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
