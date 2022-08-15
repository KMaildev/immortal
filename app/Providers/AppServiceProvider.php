<?php

namespace App\Providers;

use App\Models\Models\Activities;
use App\Models\Models\CarrerAdvice;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $footer_activities = Activities::all();
        view()->share('footer_activities', $footer_activities);

        $footer_carrer_advices = CarrerAdvice::all();
        view()->share('footer_carrer_advices', $footer_carrer_advices);
    }
}
