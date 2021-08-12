@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.area') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('app-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.area') @lang('general.module')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.area')
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
                                    <h4 class="flight-card-title col s9">@lang('general.all') @lang('general.areas')</h4>
                                    <a class="waves-effect waves-light btn-large s4" href="{{route('admin.areas.create')}}"><i class="material-icons left">create</i>@lang('general.create') @lang('general.area') @lang('general.new')</a>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.area') #</th>
                                                    <th class="center">@lang('area.name') (@lang('general.ar'))</th>
                                                    <th class="center">@lang('area.name') (@lang('general.en'))</th>
                                                    <th class="center">@lang('general.count') @lang('general.teachers')</th>
                                                    <th class="center">@lang('general.city')</th>
                                                    <th class="center">@lang('general.date')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($areas as $index => $area)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$area->name_ar}}</td>
                                                    <td class="center">{{$area->name_en}}</td>
                                                    <td class="center">{{$area->teachers->count()}}</td>
                                                    <td class="center">{{$area->city->name}}</td>
                                                    <td class="center">{{$area->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.areas.edit',['area'=>$area->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('admin.areas.destroy',['area'=>$area->id])}}" method="post" class="m-2 display-inline" type="submit">
                                                            <button class="btn red gradient-shadow white-text tooltipped animated bounceIn"  data-tooltip="@lang('general.delete')!"><i class="material-icons">delete</i></button>
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
