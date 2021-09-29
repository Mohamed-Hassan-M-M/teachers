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
                                            <h4 class="card-title">@lang('general.show') @lang('general.book')</h4>
                                        </div>
                                        <div class="col s12 m6 l2">
                                        </div>
                                    </div>
                                </div>
                                <div id="html-view-validations">
                                    <div class="row">
                                        <div class="col s6">
                                            <label for="category_id">@lang('general.cat_book')</label>
                                            <select id="category_id" name="category_id" disabled>
                                                <option value="" selected>{{$book->subject->name}}</option>
                                            </select>
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        <div class="col s6">
                                            <label for="date">@lang('book.date')</label>
                                            <input class="" disabled value="{{$book['date']}}" id="date"
                                                   name="date"
                                                   type="date">
                                            <div class="input-field">
                                            </div>
                                        </div>

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <label for="title_{{$local}}">@lang('book.name') (@lang('general.'.$local))</label>
                                                <input disabled value="{{old('title_'.$local, $book['title_'.$local])}}" id="title_{{$local}}"
                                                       name="title_{{$local}}"
                                                       type="text">
                                            </div>
                                        @endforeach

                                        @foreach(['ar', 'en'] as $local)
                                            <div class="input-field col s6">
                                                <textarea class="materialize-textarea" disabled id="description_{{$local}}"
                                                          name="description_{{$local}}"
                                                          type="text">{{old('description_'.$local, $book['description_'.$local])}}</textarea>
                                                <label for="description_{{$local}}">@lang('event.description') (@lang('general.'.$local))</label>
                                            </div>
                                        @endforeach

                                        <div class="input-field col s8">
                                            <label for="author">@lang('book.author')</label>
                                            <input disabled value="{{old('author', $book['author'])}}" id="author"
                                                   name="author"
                                                   type="text">
                                        </div>

                                        <div class="input-field col s4">
                                            <a class="btn green waves-effect waves-light" style="width: 100%"
                                               href="{{route('admin.book.download', $book->id)}}">@lang('general.download')
                                                <i class="material-icons right">file_download</i>
                                            </a>
                                        </div>

                                        <div class="col s12">
                                            <img class="materialboxed" style="width: 50%; margin: auto" src="{{$book->image_path}}">
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
