@extends('layouts.app')

@section('title')
    @lang('breadcrumbs.home')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    <h1>@lang('breadcrumbs.home')</h1>
    <div class="flex space-x-4 justify-evenly">
        <a href="{{ route('login') }}">@lang('user::breadcrumbs.login')</a>
        <a href="{{ route('profile') }}">@lang('user::breadcrumbs.profile')</a>
        <a href="{{ route('register') }}">@lang('user::breadcrumbs.register')</a>
        <a href="{{ route('reset') }}">@lang('user::breadcrumbs.reset')</a>
    </div>
@endsection
