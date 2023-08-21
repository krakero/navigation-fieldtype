<?php

namespace Krakero\NavigationFieldtype;

use Krakero\NavigationFieldtype\Fieldtypes\Navigation;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $vite = [
        'input' => [
            'resources/js/cp.js',
            'resources/css/cp.css',
        ],
        'publicDirectory' => 'resources/dist',
        'hotFile' => __DIR__ . '/../resources/dist/hot',
    ];

    public function bootAddon()
    {
        Navigation::register();
    }
}
