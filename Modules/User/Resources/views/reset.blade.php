@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.reset')
@endsection

@section('content')
    <livewire:layout.breadcrumbs route="reset"/>
    <livewire:user::partials.h1 :title="__('user::breadcrumbs.reset')"/>
@endsection