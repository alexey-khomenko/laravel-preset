@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.register')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('register') }}
@endsection

@section('content')
    <x-user::partials.h1 :title="__('user::breadcrumbs.register')"/>
@endsection
