<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Setting;
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
        // Paginator::useBootstrapFour();

        view()->composer('*', function ($view) {
        $menus = Menu::with('childrenRecursive')->whereNull('parent_id')->where('status', 1)->orderBy('order', 'asc')->get();
        $pb_setting = Setting::where('board_name','pb')->first();
        $view->with('menus', $menus)->with('pb_setting', $pb_setting);
        });
        //menu for app-pb
        view()->composer('layout.app-pb', function ($view) {
            $menus = Menu::with('childrenRecursive')->whereNull('parent_id')->where('status', 1)->orderBy('order', 'asc')->get();
            $pb_setting = Setting::where('board_name', 'pb')->first();
            $view->with('menus', $menus)->with('pb_setting', $pb_setting);
        });

    }
}
