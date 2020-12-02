@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.reset')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('reset') }}
@endsection

@section('content')
    <x-user::partials.h1 :title="__('user::breadcrumbs.reset')"/>
@endsection
