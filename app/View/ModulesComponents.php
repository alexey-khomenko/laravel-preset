<?php

namespace App\View;

use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

class ModulesComponents
{
    static public function register(string $moduleName, string $moduleNameLower, array $components)
    {
        Blade::componentNamespace('Modules\\' . $moduleName . '\\View\\Components', $moduleNameLower);

        foreach ($components as $name => $class) {
            Livewire::component($moduleNameLower . '::' . $name, $class);
        }
    }
}