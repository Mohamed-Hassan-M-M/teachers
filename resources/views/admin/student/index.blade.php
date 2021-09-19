@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.student') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.student')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.student')
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
                                    <h4 class="flight-card-title col s9">@lang('general.all') @lang('general.students')</h4>
                                    <a class="waves-effect waves-light btn-large col s3" href="{{route('admin.students.create')}}"><i class="material-icons left">create</i>@lang('general.create') @lang('general.student') @lang('general.new')</a>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.student') #</th>
                                                    <th class="center">@lang('teacher.name')</th>
                                                    <th class="center">@lang('teacher.email')</th>
                                                    <th class="center">@lang('teacher.mobile')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($students as $index => $student)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$student->username}}</td>
                                                    <td class="center">{{$student->email}}</td>
                                                    <td class="center">{{$student->mobile}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.students.show',['student'=>$student->id])}}" class="btn blue gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.show')!"><i class="material-icons">remove_red_eye</i></a>
                                                        <a href="{{route('admin.students.edit',['student'=>$student->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>
                                                        <form action="{{route('admin.students.destroy',['student'=>$student->id])}}" method="post" class="m-2 display-inline m-1" type="submit">
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
