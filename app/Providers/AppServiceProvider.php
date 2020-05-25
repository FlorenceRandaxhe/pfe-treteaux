<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Whitecube\NovaPage\Pages\Manager;

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
    public function boot(Manager $pages)
    {
        setlocale(LC_ALL, config('app.lc_all'));
        Carbon::setLocale(config('app.locale'));

        $pages->register('option', 'contact', \App\Nova\Templates\ContactOption::class);
        $pages->register('option', 'social', \App\Nova\Templates\SocialOption::class);
        $pages->register('option', 'meta', \App\Nova\Templates\MetaOption::class);

        View::composer(
            '*', 'App\Http\Composers\LayoutComposer'
        );

        View::composer(
            '*', 'App\Http\Composers\NavComposer'
        );

        View::composer(
            ['pages.home', 'pages.subscription', 'pages.contact', 'pages.about', 'pages.post', 'pages.singleEvent'],
            'App\Http\Composers\EventsComposer'
        );

        View::composer(
            ['pages.home', 'pages.event', 'pages.press', 'pages.renting', 'pages.singleNews'],
            'App\Http\Composers\NewsComposer'
        );


        //Schema::defaultStringLength(191);
    }
}
