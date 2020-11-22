@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.register')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('register') }}
@endsection

@section('content')
    <h1>@lang('user::breadcrumbs.register')</h1>
@endsection
