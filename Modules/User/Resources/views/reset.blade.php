@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.reset')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('reset') }}
@endsection

@section('content')
    <h1>@lang('user::breadcrumbs.reset')</h1>
@endsection
