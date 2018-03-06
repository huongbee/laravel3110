<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share([
        //     'book'=>'De Men phien luu ki',
        //     'author'=>'To Hoai'
        // ]);

        View::composer(['login','register'], function ($view) {
            $view->with([
                'book'=>'De Men phien luu ki',
                'author'=>'To Hoai'
            ]);
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
