@extends('layouts.app')

@section('title')
    @lang('breadcrumbs.home')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    <h1 class="mb-4">@lang('breadcrumbs.home')</h1>
    <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 xs:grid-cols-1">
        <a href="{{ route('login') }}"
           class="flex justify-center align-items-center p-3 rounded text-white bg-red-500 hover:bg-red-800">
            <span>@lang('user::breadcrumbs.login')</span>
        </a>
        <a href="{{ route('profile') }}"
           class="flex justify-center align-items-center p-3 rounded text-white bg-red-500 hover:bg-red-800">
            <span>@lang('user::breadcrumbs.profile')</span>
        </a>
        <a href="{{ route('register') }}"
           class="flex justify-center align-items-center p-3 rounded text-white bg-red-500 hover:bg-red-800">
            <span>@lang('user::breadcrumbs.register')</span>
        </a>
        <a href="{{ route('reset') }}"
           class="flex justify-center align-items-center p-3 rounded text-white bg-red-500 hover:bg-red-800">
            <span>@lang('user::breadcrumbs.reset')</span>
        </a>
    </div>
@endsection
