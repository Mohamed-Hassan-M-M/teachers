@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.book') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.book')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.books.index')}}">@lang('general.book')</a>
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
                                            <h4 class="card-title">@lang('general.create') @lang('general.book')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.books.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col s6">
                                                <label for="subject_id">@lang('general.cat_book')</label>
                                                <select id="subject_id" name="subject_id" required>
                                                    <option value="" disabled selected>@lang('general.choose') @lang('general.cat_book')</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-field">
                                                </div>
                                                @error('subject_id')
                                                <span class="red-text" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="col s6">
                                                <label for="date">@lang('book.date')</label>
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
                                                    <label for="title_{{$local}}">@lang('book.name') (@lang('general.'.$local))</label>
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
                                                    <textarea class="materialize-textarea  @error('description_'.$local) invalid  @enderror " id="description_{{$local}}"
                                                              name="description_{{$local}}"
                                                              type="text">{{old('description_'.$local)}}</textarea>
                                                    <label for="description_{{$local}}">@lang('book.description') (@lang('general.'.$local))</label>
                                                    @error('description_'.$local)
                                                    <span class="red-text" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            @endforeach

                                            <div class="input-field col s6">
                                                <label for="author">@lang('book.author')</label>
                                                <input @error('author')class="invalid" @enderror value="{{old('author')}}" id="author"
                                                       name="author"
                                                       type="text">
                                                @error('author')
                                                <span class="red-text" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="file-field input-field col s6">
                                                <div class="btn">
                                                    <span>@lang('book.content')</span>
                                                    <input type="file" name="content" required>
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path" type="text">
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
