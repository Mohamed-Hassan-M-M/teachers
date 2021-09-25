@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.review') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.review')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.reviews.index')}}">@lang('general.review')</a>
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
                                            <h4 class="card-title">@lang('general.show') @lang('general.review')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <label for="student_id">@lang('review.student')</label>
                                            <input value="{{$review->student->username}}" id="student_id"
                                                   name="student_id"
                                                   type="text"
                                                   disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="teacher_id">@lang('review.teacher')</label>
                                            <input value="{{$review->teacher->username}}" id="teacher_id"
                                                   name="teacher_id"
                                                   type="text"
                                                   disabled>
                                        </div>

                                        <div class="input-field col s12">
                                            <label for="message">@lang('review.message')</label>
                                            <input value="{{$review->message}}" id="message"
                                                   name="message"
                                                   type="text"
                                                   disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="rate">@lang('review.rate')</label>
                                            <input value="{{$review->rate}}" id="rate"
                                                   name="rate"
                                                   type="text"
                                                   disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="status">@lang('review.status')</label>
                                            <input value="{{$review->status}}" id="status"
                                                   name="status"
                                                   type="text"
                                                   disabled>
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
