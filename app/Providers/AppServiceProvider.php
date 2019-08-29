<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use URL;
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
        /*if(env("HTTPS")=="YES") {
            URL::forceScheme('https');
        }else{
            URL::forceScheme('http');
        }*/
        //
        env("HTTPS") == "YES" ? URL::forceScheme('https') : URL::forceScheme('http');
        Schema::defaultStringLength(191);
        // Carbon::setlocale('es');
        // Carbon::setUTF8(true);
        // setlocale(LC_TIME, 'es_ES');


    }




}
