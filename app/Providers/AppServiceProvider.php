<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        view()->composer('*', function ($view) {
        $menus = Menu::with('childrenRecursive')->whereNull('parent_id')->orderBy('order')->get();
        $view->with('menus', $menus);
        });
        //menu for app-pb
        view()->composer('layout.app-pb', function ($view) {
            $menus = Menu::with('childrenRecursive')->whereNull('parent_id')->orderBy('order')->get();
            $view->with('menus', $menus);
        });


    }
}
