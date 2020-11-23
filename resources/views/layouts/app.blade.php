<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/build/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/build/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/build/favicon-16x16.png">
    <link rel="manifest" href="/build/site.webmanifest">
    <link rel="mask-icon" href="/build/safari-pinned-tab.svg" color="#2563eb">
    <link rel="shortcut icon" href="/build/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/build/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="antialiased">

<div class="container bg-indigo-100 mx-auto xl:w-full min-h-screen px-4">
    @include('layouts.partials.languages', ['breadcrumbs' => []])
    @yield('breadcrumbs')
    @yield('content')
</div>
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>
