@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.register')
@endsection

@section('content')
    {{ Breadcrumbs::render('register') }}
    <x-user::partials.h1 :title="__('user::breadcrumbs.register')"/>
@endsection