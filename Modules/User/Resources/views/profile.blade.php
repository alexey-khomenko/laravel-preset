@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.profile')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('profile') }}
@endsection

@section('content')
    <x-user::partials.h1 :title="__('user::breadcrumbs.profile')"/>
@endsection
