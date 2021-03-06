<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\UploadRepository',
            'App\Repositories\UploadRepositoryEloquent'
        );
        $this->app->bind(
            'App\Repositories\AssetRepository',
            'App\Repositories\AssetRepositoryEloquent'
        );
    }
}
