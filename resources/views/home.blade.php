@extends('layouts.app')

@section('title')
    @lang('breadcrumbs.home')
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    <div class="grid grid-cols-4 sm:grid-cols-2 xs:grid-cols-1 gap-3 my-3">
        @foreach (['login', 'profile', 'register', 'reset'] as $route)
            <x-test.button-test :route="$route"/>
        @endforeach
    </div>

    <div class="w-40 mx-auto">
        <x-test.image alt="Лого" src="images/logo.png" srcset="images/logo.webp" class="l--image-square"/>
    </div>

    <div class="w-40 mx-auto">
        <x-test.image alt="Лого" src="images/logo.png" srcset="images/logo.webp" ratio="100"/>
    </div>
@endsection
