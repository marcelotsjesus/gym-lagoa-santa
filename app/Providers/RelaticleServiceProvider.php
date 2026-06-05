<?php

namespace App\Providers;

use App\Services\Relaticle\RelaticleClient;
use App\Services\Relaticle\RelaticleManager;
use Illuminate\Support\ServiceProvider;

class RelaticleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/relaticle.php', 'relaticle');

        $this->app->singleton(RelaticleClient::class, function ($app) {
            $config = $app['config']['relaticle'];

            return new RelaticleClient(
                baseUrl: $config['base_url'],
                token: $config['token'] ?? '',
                timeout: $config['timeout'],
            );
        });

        $this->app->singleton(RelaticleManager::class, function ($app) {
            return new RelaticleManager($app->make(RelaticleClient::class));
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/relaticle.php' => config_path('relaticle.php'),
            ], 'relaticle-config');
        }
    }
}
