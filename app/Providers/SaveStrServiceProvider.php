<?php

namespace App\Providers;

use App\Helpers\SaveEloquentOrm;
use App\Helpers\SaveFile;
use Illuminate\Support\ServiceProvider;

class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $obj = new SaveFile();

//        $this->app->instance('App\Helpers\Contracts\SaveStr', $obj);

//        dd($this->app->make('App\Helpers\Contracts\SaveStr'));

//        $this->app->singleton('App\Helpers\Contracts\SaveStr', function () {
//        $this->app->bind('App\Helpers\Contracts\SaveStr', function () {
////            return new SaveEloquentOrm();
//            return new SaveFile();
//        });

        $this->app->bind('SaveStr', function () {
//            return new SaveEloquentOrm();
            return new SaveFile();
        });

//        $this->app->bind('App\Helpers\Contracts\SaveStr', 'App\Helpers\SaveFile');
    }
}
