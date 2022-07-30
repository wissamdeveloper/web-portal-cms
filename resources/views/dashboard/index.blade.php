@extends('layouts.dashboard')

@section('title')
    {{trans('dashboard.title.index')}}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard_home') }}
@endsection

@section('content')
    <div class="row">
    <div class="col-md-12">
    <!-- <h2>
    {{trans('dashboard.greeting.welcome',['name' => Auth::user()->name])}}
    </h2>
    <h2>Welcome {{Auth::user()->name}}</h2> -->
    </div>
    </div>

@endsection
