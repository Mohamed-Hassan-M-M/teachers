@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.contact') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.contact')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.contact')
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
                                    <h4 class="flight-card-title col s9">@lang('general.all') @lang('general.contact')</h4>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.contact') #</th>
                                                    <th class="center">@lang('contact.name')</th>
                                                    <th class="center">@lang('contact.email')</th>
                                                    <th class="center">@lang('general.date')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($contacts as $index => $contact)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$contact->name}}</td>
                                                    <td class="center">{{$contact->email}}</td>
                                                    <td class="center">{{$contact->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.contacts.show',['contact'=>$contact->id])}}" class="btn blue gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.show')!"><i class="material-icons">remove_red_eye</i></a>
{{--                                                        <a href="{{route('admin.contacts.edit',['contact'=>$contact->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>--}}
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
