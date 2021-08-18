<?php

namespace Creativeorange\Components;

use Illuminate\Support\ServiceProvider;

use function base_path;

class ComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'components');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/components'),
        ], 'views');
    }
}
