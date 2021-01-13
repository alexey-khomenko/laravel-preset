<?php

use Livewire\Livewire;

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

// todo убрать
if (!function_exists('registerModuleComponents')) {
    function registerModuleComponents(string $moduleNameLower, array $components)
    {
        foreach ($components as $name => $class) {
            Livewire::component($moduleNameLower . '::' . $name, $class);
        }
    }
}