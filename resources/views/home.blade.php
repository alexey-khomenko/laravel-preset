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
        <x-test.image :alt="$logo['alt']" :src="$logo['src']" :srcset="$logo['srcset']"/>
        {{-- todo className (pb-full) не обязательный параметр --}}
    </div>
@endsection
