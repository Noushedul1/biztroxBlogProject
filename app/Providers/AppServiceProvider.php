<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use View;

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
        // View::share('name','BITM');
        View::composer(['*'],function($view){
            $view->with('categories',Category::all());
        });
        View::composer(['*'],function($view){
            $view->with('frontendChange',Company::first());
        });
        Paginator::useBootstrap();
    }
}
