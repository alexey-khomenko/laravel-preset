{{-- todo: Сделать функцию, доступную везде --}}

@php
    function mixAsset ($path) {
        $path = substr($path, 0, 1) === '/' ? substr($path, 1) : $path;

        return env('APP_ENV') === 'production' ? mix($path, 'build') : asset('build/' . $path);
    }
@endphp

<link rel="apple-touch-icon" sizes="180x180" href="{{ mixAsset('favicons/apple-touch-icon.png') }}"/>
<link rel="icon" type="image/png" sizes="32x32" href="{{ mixAsset('favicons/favicon-32x32.png') }}"/>
<link rel="icon" type="image/png" sizes="16x16" href="{{ mixAsset('favicons/favicon-16x16.png') }}"/>
<link rel="manifest" href="{{ mixAsset('favicons/site.webmanifest') }}"/>
<link rel="shortcut icon" href="{{ mixAsset('favicons/favicon.ico') }}"/>
<link rel="mask-icon" color="#2563eb" href="{{ mixAsset('favicons/safari-pinned-tab.svg') }}"/>
<meta name="msapplication-config" content="{{ mixAsset('favicons/browserconfig.xml') }}"/>
<meta name="msapplication-TileColor" content="#2563eb"/>
<meta name="theme-color" content="#ffffff"/>