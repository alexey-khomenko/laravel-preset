@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.profile')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('profile') }}
@endsection

@section('content')
    <h1>@lang('user::breadcrumbs.profile')</h1>
@endsection
