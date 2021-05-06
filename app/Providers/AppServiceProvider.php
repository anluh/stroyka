<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $services = Service::all();
//        $categories = Category::all();
//
//        view()->share(['services' => $services, 'categories' => $categories]);
    }
}
