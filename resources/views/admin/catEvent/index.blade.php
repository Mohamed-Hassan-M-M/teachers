@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.cat_event') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.cat_event')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.cat_event')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <div class="section section-data-tables">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="mb-4 col s12">
                                    <h4 class="flight-card-title col s9">@lang('general.all') @lang('general.cat_events')</h4>
                                    <a class="waves-effect waves-light btn-large col s3" href="{{route('admin.cat_events.create')}}"><i class="material-icons left">create</i>@lang('general.create') @lang('general.cat_event') @lang('general.new')</a>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.cat_event') #</th>
                                                    <th class="center">@lang('event.name') (@lang('general.ar'))</th>
                                                    <th class="center">@lang('event.name') (@lang('general.en'))</th>
                                                    <th class="center">@lang('general.count') @lang('general.events')</th>
                                                    <th class="center">@lang('general.date')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $index => $category)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$category->name_ar}}</td>
                                                    <td class="center">{{$category->name_en}}</td>
                                                    <td class="center">{{$category->events->count()}}</td>
                                                    <td class="center">{{$category->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.cat_events.show',['cat_event'=>$category->id])}}" class="btn blue gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.show')!"><i class="material-icons">remove_red_eye</i></a>
                                                        <a href="{{route('admin.cat_events.edit',['cat_event'=>$category->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('admin.cat_events.destroy',['cat_event'=>$category->id])}}" method="post" class="m-2 display-inline m-1" type="submit">
                                                            <button type="button" class="removeModule btn red gradient-shadow white-text tooltipped animated bounceIn"  data-tooltip="@lang('general.delete')!"><i class="material-icons">delete</i></button>
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
