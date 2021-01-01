@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.login')
@endsection

@section('content')
    {{ Breadcrumbs::render('login') }}
    <x-user::partials.h1 :title="__('user::breadcrumbs.login')"/>
    <livewire:user::test/>
    <livewire:user::test.test/>
@endsection