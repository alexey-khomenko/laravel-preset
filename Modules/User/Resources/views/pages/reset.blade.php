@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.reset')
@endsection

@section('content')
    <x-layout.breadcrumbs route="reset"/>
    <x-user::partials.h1 :title="__('user::breadcrumbs.reset')"/>
@endsection