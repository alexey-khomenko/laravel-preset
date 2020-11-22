@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.login')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('login') }}
@endsection

@section('content')
    <h1>@lang('user::breadcrumbs.login')</h1>
@endsection
