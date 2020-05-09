<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        view()->composer(
            '*', 'App\Http\Composers\NavComposer'
        );


        setlocale(LC_ALL, config('app.lc_all'));
        Carbon::setLocale(config('app.locale'));
        Schema::defaultStringLength(191);
    }
}
