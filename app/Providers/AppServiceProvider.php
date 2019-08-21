<?php

namespace App\Providers;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        env("HTTPS") == "YES" ? URL::forceScheme('https') : URL::forceScheme('http');
        Carbon::setlocale('es');
        Carbon::setUTF8(true);
        setlocale(LC_TIME, 'es_ES');


    }




}
