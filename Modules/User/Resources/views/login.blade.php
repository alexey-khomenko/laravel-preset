@extends('layouts.app')

@section('title')
    @lang('user::breadcrumbs.login')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('login') }}
@endsection

@section('content')
    <x-user::test.login/>
@endsection
