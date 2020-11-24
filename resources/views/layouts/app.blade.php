<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}"/>
    <title>@yield('title') - Laravel</title>
    @include('layouts.partials.favicons')
</head>
<body class="bg-image bg-white antialiased">

<div class="container bg-indigo-100 mx-auto xl:w-full min-h-screen px-4">
    @include('layouts.partials.languages')
    @yield('breadcrumbs')
    @yield('content')
</div>

<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>
