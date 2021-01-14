@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.login')
@endsection

@section('content')
    <x-layout.breadcrumbs route="login"/>
    <x-user::partials.h1 :title="__('user::breadcrumbs.login')"/>
@endsection