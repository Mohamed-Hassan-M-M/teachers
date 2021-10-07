@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.subcat_book') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.subcat_book')</span></h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('admin.subsubject_books.index')}}">@lang('general.subcat_book')</a>
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
                                            <h4 class="card-title">@lang('general.update') @lang('general.subcat_book')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" action="{{route('admin.subsubject_books.update', $subCategory->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col s12">
                                                <label for="subject_id">@lang('general.cat_book')</label>
                                                <select id="subject_id" name="subject_id" required>
                                                    <option value="" disabled>@lang('general.choose') @lang('general.cat_book')</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if($subCategory->subject->id == $category->id) selected @endif>{{$category->name}}</option>
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

                                            @foreach(['ar', 'en'] as $local)
                                                <div class="input-field col s6">
                                                    <label for="name_{{$local}}">@lang('book.name') (@lang('general.'.$local))</label>
                                                    <input @error('name_'.$local)class="invalid" @enderror required value="{{old('name_'.$local, $subCategory['name_'.$local])}}" id="name_{{$local}}"
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
