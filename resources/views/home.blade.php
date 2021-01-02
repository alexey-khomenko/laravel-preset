@extends('layouts.app')

@section('title')
    @lang('breadcrumbs.home')
@endsection

@section('content')
    <livewire:layout.breadcrumbs route="home"/>
    <div class="w-40 mx-auto">
        <livewire:partials.image alt="Лого" src="images/logo.png" srcset="images/logo.webp" width="192" height="192"/>
    </div>
@endsection