<?php

namespace App\Providers;

use App\Category;
use App\Plant;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        // Using Closure based composers...
        View::composer('sidebar.categories', function ($view) {
            $categories = Category::all();
            $view->with(['categories' => $categories]);
        });

        View::composer('layouts.footer', function ($view) {
            $count = Plant::all()->count();
            $idRand = rand(0, $count) ?? 0;
            $plantRand = Plant::query()->find($idRand);
            $view->with(['plantRand' => $plantRand]);
        });
        View::composer('layouts.content-bottom', function ($view) {
            $plants = Plant::query()->limit(3)->orderByDesc('id')->get();
            $view->with(['plants' => $plants]);
        });





    }
}
