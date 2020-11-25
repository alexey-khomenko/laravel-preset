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

    <picture class="block">
        <source srcset="{{ emptySrc() }}"
                data-srcset="{{ mixAsset('images/logo.webp') }}" type="image/webp"/>
        <img src="{{ emptySrc() }}" class="lazyload mx-auto" alt="Лого" width="192" height="192"
             data-src="{{ mixAsset('images/logo.png') }}" />
    </picture>

    <hr class="border-black"/>
@endsection
