<?php

namespace LaravelReady\RedSwan;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

final class ThemeServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->bootPublishes();
    }

    public function register(): void
    {
        $this->registerConfigs();
    }

    protected function bootPublishes(): void
    {
        /*--------------------------------------------------------------------------
        | Publish theme configs
        |--------------------------------------------------------------------------*/

        $this->publishes([
            __DIR__ . "/../config/config.php" => $this->app->configPath("my-theme-config.php"),
        ], 'my-theme-config');


        /*--------------------------------------------------------------------------
        | Publish public theme assets
        |--------------------------------------------------------------------------*/

        $this->publishes([
            __DIR__ . '/../public' => public_path("theme/..."),
        ], 'public');
    }

    protected function registerConfigs(): void
    {
        /*--------------------------------------------------------------------------
        | Register theme specific configs
        |--------------------------------------------------------------------------*/

        $this->mergeConfigFrom(__DIR__ . "/../config/config.php", "theme-...");
    }
}
