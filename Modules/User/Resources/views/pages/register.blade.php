@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.register')
@endsection

@section('content')
    <livewire:layout.breadcrumbs route="register"/>
    <livewire:user::partials.h1 :title="__('user::breadcrumbs.register')"/>
@endsection