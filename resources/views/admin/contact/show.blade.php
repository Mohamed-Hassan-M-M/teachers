@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.contact') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.contact')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.contacts.index')}}">@lang('general.contact')</a>
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
                                            <h4 class="card-title">@lang('general.show') @lang('general.contact')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <label for="name">@lang('contact.student')</label>
                                            <input value="{{$contact->name}}" id="name"
                                                   name="name"
                                                   type="text"
                                                   disabled>
                                        </div>

                                        <div class="input-field col s6">
                                            <label for="email">@lang('contact.email')</label>
                                            <input value="{{$contact->email}}" id="email"
                                                   name="email"
                                                   type="text"
                                                   disabled>
                                        </div>

                                        <div class="input-field col s12">
                                            <label for="message">@lang('contact.message')</label>
                                            <input value="{{$contact->message}}" id="message"
                                                   name="message"
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
