<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}">
</head>
<body class="antialiased bg-indigo-100">

<div class="container mx-auto xl:w-full min-h-screen px-4">
    @include('layouts.partials.languages', ['breadcrumbs' => []])
    @yield('breadcrumbs')
    @yield('content')
</div>
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>
