<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}">
</head>
<body>

{{ Breadcrumbs::render('home') }}

<p><a href="{{ LaravelLocalization::getLocalizedURL('ru') }}">{{ LaravelLocalization::getLocalizedURL('ru') }}</a></p>
<p><a href="{{ LaravelLocalization::getLocalizedURL('uk') }}">{{ LaravelLocalization::getLocalizedURL('uk') }}</a></p>
<p><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">{{ LaravelLocalization::getLocalizedURL('en') }}</a></p>

<p class="flow-root">TEST</p>

<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>
