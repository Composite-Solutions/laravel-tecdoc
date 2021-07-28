<?php

namespace Composite\TecDoc;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class TecDocServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $configPath = __DIR__.'/../config/tecdoc.php';

        $this->publishes([
            $configPath => $this->app->configPath('tecdoc.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'tecdoc');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('tecdoc', static function (Application $app) {
            $config = $app['config']['tecdoc'];

            return new TecDoc(
                new Gateway($config['service_url'], $config['api_key'], $config['provider_id'])
            );
        });

        $this->app->alias('tecdoc', TecDoc::class);
    }
}
