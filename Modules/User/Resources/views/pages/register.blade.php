@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.register')
@endsection

@section('content')
    <x-layout.breadcrumbs route="register"/>
    <x-user::partials.h1 :title="__('user::breadcrumbs.register')"/>
@endsection