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

                                        <div class="input-field col s6">
                                            <label for="username">@lang('teacher.name')</label>
                                            <input value="{{$student['username']}}" id="username"
                                                   name="username"
                                                   type="text" disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="mobile">@lang('teacher.mobile')</label>
                                            <input value="{{$student['mobile']}}" id="mobile"
                                                   name="mobile"
                                                   type="number" disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="email">@lang('teacher.email')</label>
                                            <input value="{{$student['email']}}" id="email"
                                                   name="email"
                                                   type="email" disabled>
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
