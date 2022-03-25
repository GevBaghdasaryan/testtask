<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CategoryService;
use App\Interfaces\CategoryServiceInterface;
use App\Services\ProductService;
use App\Interfaces\ProductServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
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
