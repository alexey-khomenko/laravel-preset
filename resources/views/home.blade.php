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
        <picture class="image-ratio-picture" style="padding-bottom: 100%">
            <source srcset="{{ emptySrc() }}" type="image/webp" data-srcset="{{ mixAsset('images/logo.webp') }}"/>
            <img src="{{ emptySrc() }}" class="image-ratio-img lazyload" alt="Лого"
                 data-src="{{ mixAsset('images/logo.png') }}"/>
        </picture>
    </div>
@endsection
