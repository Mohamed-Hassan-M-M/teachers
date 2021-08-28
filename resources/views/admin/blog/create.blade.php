@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.blog') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.blog')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.blogs.index')}}">@lang('general.blog')</a>
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
                                            <h4 class="card-title">@lang('general.create') @lang('general.blog')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.blogs.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col s12">
                                                <label for="date">@lang('blog.date')</label>
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
                                                    <label for="title_{{$local}}">@lang('blog.name') (@lang('general.'.$local))</label>
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
                                                    <label for="description_{{$local}}">@lang('blog.description') (@lang('general.'.$local))</label>
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
