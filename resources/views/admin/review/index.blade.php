@extends('layouts.admin.app')
@section('title') @lang('general.dashboard') | @lang('general.review') @endsection
@section('content')
    <div id="breadcrumbs-wrapper" data-image="{{asset('admin-assets/images/gallery/breadcrumb-bg.jpg')}}">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title mt-0 mb-0"><span>@lang('general.module') @lang('general.review')</span>
                    </h5>
                </div>
                <div class="col s12 m6 l6 right-align-md">
                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">@lang('general.home')</a>
                        </li>
                        <li class="breadcrumb-item active">@lang('general.review')
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
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display">
                                            <thead>
                                                <tr>
                                                    <th class="center">@lang('general.review') #</th>
                                                    <th class="center">@lang('review.student')</th>
                                                    <th class="center">@lang('review.teacher')</th>
                                                    <th class="center">@lang('review.status')</th>
                                                    <th class="center">@lang('review.rate')</th>
                                                    <th class="center">@lang('general.date')</th>
                                                    <th class="center">@lang('general.option')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($reviews as $index => $review)
                                                <tr>
                                                    <td class="center">{{++$index}}</td>
                                                    <td class="center">{{$review->student->username}}</td>
                                                    <td class="center">{{$review->teacher->name}}</td>
                                                    <td class="center">{{$review->status}}</td>
                                                    <td class="center"><i class="material-icons" style="font-size: 16px; color: gold">star</i><span>({{$review->rate}})</span></td>
                                                    <td class="center">{{$review->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{route('admin.reviews.show',['review'=>$review->id])}}" class="btn blue gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.show')!"><i class="material-icons">remove_red_eye</i></a>
                                                        <a href="{{route('admin.reviews.edit',['review'=>$review->id])}}" class="btn green gradient-shadow white-text tooltipped animated bounceIn m-1"  data-tooltip="@lang('general.edit')!"><i class="material-icons">edit</i></a>
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
