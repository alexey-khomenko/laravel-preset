@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.profile')
@endsection

@section('content')
    {{ Breadcrumbs::render('profile') }}
    <x-user::partials.h1 :title="__('user::breadcrumbs.profile')"/>
@endsection