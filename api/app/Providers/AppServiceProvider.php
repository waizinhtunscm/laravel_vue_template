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
        // Dao Registration
        $this->app->bind("App\Dao\Blog\BlogDaoInterface", "App\Dao\Blog\BlogDao");
        // Business logic registration
        $this->app->bind("App\Services\Blog\BlogServiceInterface", "App\Services\Blog\BlogService");
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
