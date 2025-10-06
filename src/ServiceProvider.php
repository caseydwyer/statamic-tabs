<?php

namespace CaseyDwyer\StatamicTabs;

use Statamic\Providers\AddonServiceProvider;
use CaseyDwyer\StatamicTabs\Fieldtypes\TabFieldtype;
 
class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        TabFieldtype::class,
    ];

    protected $vite = [
        'hotFile' => __DIR__ . '/../dist/vite.hot',
        'publicDirectory' => 'dist',
        'input' => [
            'resources/js/statamic-tabs.js',
            'resources/css/statamic-tabs.css'
        ],
    ];
}