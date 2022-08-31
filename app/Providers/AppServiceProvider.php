<?php

namespace App\Providers;
// use PharIo\Manifest\Url;
// use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
// use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\URL;
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
        // URL::forceScheme('https');
    }
}
