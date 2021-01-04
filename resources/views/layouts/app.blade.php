<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <livewire:layout.favicons/>
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}"/>
    <livewire:styles/>
    <title>@yield('title') - Laravel</title>
</head>
<x-layout.body>
    <div class="l--container bg-indigo-100 xl:w-full min-h-screen mx-auto px-4">
        <livewire:layout.languages/>
        <livewire:user::layout.auth/>
        @yield('content')
    </div>

    <script src="{{ mix('js/manifest.js', 'build') }}" async></script>
    <script src="{{ mix('js/vendor.js', 'build') }}" async></script>
    <script src="{{ mix('js/app.js', 'build') }}" async></script>
    <livewire:scripts/>
</x-layout.body>
</html>