<?php

namespace App\Providers;


use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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
        try{
            $categoriesGlobal = Category::all();
            $menusGlobal = Menu::all();
        }catch (\Exception $exception)
        {

        }
        \View::share('categoriesGlobal', $categoriesGlobal ?? []);
        \View::share('menusGlobal', $menusGlobal ?? []);


        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
