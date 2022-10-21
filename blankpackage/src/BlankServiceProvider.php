<?php

namespace blankpackage\blank;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class BlankServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register classes in the service container
    }

    public function boot()
    {
        // If you are using Livewire components, they need to be registered here
        Livewire::component('blank-index', \blankpackage\blank\Http\Livewire\Blank\BlankIndex::class);

        // If you want to publish files into the Laravel app add them to this list

        // $this->publishes([
        //   __DIR__ . '/Models/' => database_path('Models'),
        // ], 'Models');
        // $this->publishes([
        //     __DIR__ . '/../database/migrations/' => database_path('migrations'),
        // ], 'migrations');
        // $this->publishes([
        //     __DIR__ . '/../database/factories/' => database_path('factories'),
        // ], 'factories');
        // $this->publishes([
        //     __DIR__ . '/../database/seeders/' => database_path('seeders'),
        // ], 'seeders');
        // $this->publishes([
        //     __DIR__ . '/../config/blankpackage.php' => config_path('blankpackage.php')
        // ], 'config');

        // Load views and routes
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'blank');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
