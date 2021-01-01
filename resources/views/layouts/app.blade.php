<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <x-layouts.partials.favicons/>
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}"/>
    <title>@yield('title') - Laravel</title>
    <livewire:styles />
</head>
<x-layouts.partials.body>
    <div class="l--container bg-indigo-100 xl:w-full min-h-screen mx-auto px-4">
        <x-layouts.partials.languages/>

        <div class="grid grid-cols-5 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-3 my-3">
            @foreach (['login', 'register', 'reset', 'profile', 'logout'] as $route)
                <x-partials.button-test :route="$route"/>
            @endforeach
        </div>

        @yield('content')
    </div>

    <script src="{{ mix('js/manifest.js', 'build') }}" async></script>
    <script src="{{ mix('js/vendor.js', 'build') }}" async></script>
    <script src="{{ mix('js/app.js', 'build') }}" async></script>
    <livewire:scripts />
</x-layouts.partials.body>
</html>