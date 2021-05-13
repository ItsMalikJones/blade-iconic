<?php

namespace ItsMalikJones\BladeIconic;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeIconicServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-iconic', []);

            $factory->add('iconic', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-iconic.php', 'blade-iconic');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-iconic'),
            ], 'blade-iconic');

            $this->publishes([
                __DIR__.'/../config/blade-iconic.php' => $this->app->configPath('blade-iconic.php'),
            ], 'blade-iconic-config');
        }
    }
}
