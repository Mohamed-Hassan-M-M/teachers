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
                        <li class="breadcrumb-item active">@lang('general.update')
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
                                            <h4 class="card-title">@lang('general.update') @lang('general.review')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.reviews.update', $review->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
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

                                            <div class="col s6">
                                                <label for="status">@lang('review.status')</label>
                                                <select id="status" name="status" required>
                                                    <option value="0" @if($review->status == '0') selected @endif >@lang('review.pending')</option>
                                                    <option value="1" @if($review->status == '1') selected @endif >@lang('review.approved')</option>
                                                    <option value="2" @if($review->status == '2') selected @endif >@lang('review.rejected')</option>
                                                </select>
                                                <div class="input-field">
                                            </div>

                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit"
                                                        name="action">@lang('general.save')
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
