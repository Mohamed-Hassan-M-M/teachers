@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.sector') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('app-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.sector')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.sector')
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
                                    <h4 class="flight-card-title col s9">@lang('general.all') @lang('general.sectors')</h4>
                                    <a class="waves-effect waves-light btn-large col s3" href="{{route('admin.sectors.create')}}"><i class="material-icons left">create</i>@lang('general.create') @lang('general.sector') @lang('general.new')</a>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.sector') #</th>
                                                    <th class="center">@lang('sector.name') (@lang('general.ar'))</th>
                                                    <th class="center">@lang('sector.name') (@lang('general.en'))</th>
                                                    <th class="center">@lang('sector.type')</th>
                                                    <th class="center">@lang('general.count') @lang('general.classes')</th>
                                                    <th class="center">@lang('general.date')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sectors as $index => $sector)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$sector->name_ar}}</td>
                                                    <td class="center">{{$sector->name_en}}</td>
                                                    <td class="center">{{$sector->type}}</td>
                                                    <td class="center">{{$sector->classes->count()}}</td>
                                                    <td class="center">{{$sector->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.sectors.show',['sector'=>$sector->id])}}" class="btn blue gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.show')!"><i class="material-icons">remove_red_eye</i></a>
                                                        <a href="{{route('admin.sectors.edit',['sector'=>$sector->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('admin.sectors.destroy',['sector'=>$sector->id])}}" method="post" class="display-inline m-1" type="submit">
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
