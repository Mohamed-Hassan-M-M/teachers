@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.city') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('app-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.city') @lang('general.module')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.city')
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
                                    <h4 class="flight-card-title col s9">@lang('general.all') @lang('general.cities')</h4>
                                    <a class="waves-effect waves-light btn-large s4" href="{{route('admin.cities.create')}}"><i class="material-icons left">create</i>@lang('general.create') @lang('general.city') @lang('general.new')</a>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.city') #</th>
                                                    <th class="center">@lang('city.name') (@lang('general.ar'))</th>
                                                    <th class="center">@lang('city.name') (@lang('general.en'))</th>
                                                    <th class="center">@lang('general.count') @lang('general.areas')</th>
                                                    <th class="center">@lang('general.date')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cities as $index => $city)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$city->name_ar}}</td>
                                                    <td class="center">{{$city->name_en}}</td>
                                                    <td class="center">{{$city->areas->count()}}</td>
                                                    <td class="center">{{$city->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.cities.edit',['city'=>$city->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('admin.cities.destroy',['city'=>$city->id])}}" method="post" class="m-2 display-inline" type="submit">
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
