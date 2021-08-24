<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Contracts\Services\RunnerServiceInterface', 'App\Services\RunnerService');
        $this->app->bind('App\Contracts\Repositories\RunnerRepositoryInterface', 'App\Repositories\RunnerRepository');
    }
}
