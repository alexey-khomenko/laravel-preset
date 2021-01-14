@extends('layouts.app')

@section('title')
    @lang('breadcrumbs.home')
@endsection

@section('content')
    <x-layout.breadcrumbs route="home"/>
    <div class="w-40 mx-auto">
        <x-partials.image alt="Лого" src="images/logo.png" srcset="images/logo.webp" width="192" height="192"/>
    </div>

    <livewire:test/>
@endsection