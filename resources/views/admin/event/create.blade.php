@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.event') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.event')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.events.index')}}">@lang('general.event')</a>
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
                                            <h4 class="card-title">@lang('general.create') @lang('general.event')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.events.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col s6">
                                                <label for="category_id">@lang('general.cat_event')</label>
                                                <select id="category_id" name="category_id" required>
                                                    <option value="" disabled selected>@lang('general.choose') @lang('general.cat_event')</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-field">
                                                </div>
                                                @error('category_id')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col s6">
                                                <label for="date">@lang('event.date')</label>
                                                <input @error('date')class="invalid" @enderror value="{{old('date')}}" id="date"
                                                       name="date"
                                                       type="date">
                                                <div class="input-field">
                                                </div>
                                                @error('date')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            @foreach(['ar', 'en'] as $local)
                                                <div class="input-field col s6">
                                                    <label for="title_{{$local}}">@lang('event.name') (@lang('general.'.$local))</label>
                                                    <input @error('title_'.$local)class="invalid" @enderror required value="{{old('title_'.$local)}}" id="title_{{$local}}"
                                                           name="title_{{$local}}"
                                                           type="text">
                                                    @error('title_'.$local)
                                                        <span class="red-text" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            @endforeach

                                            @foreach(['ar', 'en'] as $local)
                                                <div class="input-field col s12">
                                                    <label for="description_{{$local}}">@lang('event.description') (@lang('general.'.$local))</label>
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
                                                    <select id="area_id" name="area_id[]" class="select2 browser-default" multiple="multiple" required>
                                                        <option value="" disabled>@lang('general.choose') @lang('general.area')</option>
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
