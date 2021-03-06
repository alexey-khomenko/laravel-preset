<?php

if (!function_exists('mixAsset')) {
    function mixAsset(string $path): string
    {
        $path = substr($path, 0, 1) === '/' ? substr($path, 1) : $path;
        $asset = asset('build/' . $path);

        if (env('APP_ENV') !== 'production') return $asset;

        try {
            return mix($path, 'build');
        } catch (Exception $e) {
            return $asset;
        }
    }
}