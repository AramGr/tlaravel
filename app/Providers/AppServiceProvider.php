<?php

namespace App\Providers;

use App\Article;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

//        Blade::directive('myDir', function($var){
//            return "<h1>New Directive - $var</h1>";
//        });

//        Response::macro('myRes', function ($value){
//
//            return Response::make($value);
//
//        });

//        DB::listen(function($query){
//
//            dump($query->sql);
////            dump($query->bindings);
//
//        });

//        Article::created(function(Article $article){
//            Log::info('Article save', [$article->user->name => $article->name]);
//        });
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
