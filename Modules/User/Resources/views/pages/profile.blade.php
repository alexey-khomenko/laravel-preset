@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.profile')
@endsection

@section('content')
    <livewire:layout.breadcrumbs route="profile"/>
    <livewire:user::partials.h1 :title="__('user::breadcrumbs.profile')"/>
@endsection