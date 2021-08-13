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
                                            <h4 class="card-title">@lang('general.create') @lang('general.subject')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.subjects.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col s12">
                                                <label for="class_id">@lang('general.classes')</label>
                                                <select id="class_id" name="class_id" required>
                                                    <option value="" disabled selected>@lang('general.choose') @lang('general.classes')</option>
                                                    @foreach($classes as $class)
                                                        <option value="{{$class->id}}">{{$class->sector->type}} -> {{$class->sector->name}} -> {{$class->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-field">
                                                </div>
                                                @error('class_id')
                                                <span class="red-text" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>

                                            @foreach(['ar', 'en'] as $local)
                                                <div class="input-field col s6">
                                                    <label for="name_{{$local}}">@lang('subject.name') (@lang('general.'.$local))</label>
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
