@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.subject') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.subject')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.subject')
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
                                    <h4 class="flight-card-title col s9">@lang('general.all') @lang('general.subjects')</h4>
                                    <a class="waves-effect waves-light btn-large col s3" href="{{route('admin.subjects.create')}}"><i class="material-icons left">create</i>@lang('general.create') @lang('general.subject') @lang('general.new')</a>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.subject') #</th>
                                                    <th class="center">@lang('subject.name') (@lang('general.ar'))</th>
                                                    <th class="center">@lang('subject.name') (@lang('general.en'))</th>
                                                    <th class="center">@lang('general.count') @lang('general.teachers')</th>
                                                    <th class="center">@lang('general.classes')</th>
                                                    <th class="center">@lang('general.date')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($subjects as $index => $subject)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$subject->name_ar}}</td>
                                                    <td class="center">{{$subject->name_en}}</td>
                                                    <td class="center">{{$subject->teachers->count()}}</td>
                                                    <td class="center">{{$subject->classes->name}}</td>
                                                    <td class="center">{{$subject->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.subjects.show',['subject'=>$subject->id])}}" class="btn blue gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.show')!"><i class="material-icons">remove_red_eye</i></a>
                                                        <a href="{{route('admin.subjects.edit',['subject'=>$subject->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('admin.subjects.destroy',['subject'=>$subject->id])}}" method="post" class="m-2 display-inline m-1" type="submit">
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
