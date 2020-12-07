<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}"/>
    <title>@yield('title') - Laravel</title>
    <x-layouts.partials.favicons/>
</head>
<x-layouts.partials.body>
    <div class="l--container bg-indigo-100 xl:w-full min-h-screen mx-auto px-4">
        <x-layouts.partials.languages/>
        @hasSection('breadcrumbs')
            @yield('breadcrumbs')
        @endif
        @yield('content')
    </div>
    <script src="{{ mix('js/manifest.js', 'build') }}" async></script>
    <script src="{{ mix('js/vendor.js', 'build') }}" async></script>
    <script src="{{ mix('js/app.js', 'build') }}" async></script>
</x-layouts.partials.body>
</html>