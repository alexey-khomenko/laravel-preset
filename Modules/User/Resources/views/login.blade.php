@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.login')
@endsection

@section('content')
    <livewire:layout.breadcrumbs route="login"/>
    <livewire:user::partials.h1 :title="__('user::breadcrumbs.login')"/>
@endsection