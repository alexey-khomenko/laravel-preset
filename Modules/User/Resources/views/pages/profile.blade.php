@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.profile')
@endsection

@section('content')
    <x-layout.breadcrumbs route="profile"/>
    <x-user::partials.h1 :title="__('user::breadcrumbs.profile')"/>
@endsection