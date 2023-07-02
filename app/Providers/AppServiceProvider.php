<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

//custom validator for slug unicode validate
use Validator;

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
        //To show all aside content in all pages
        // view()->composer('layout.aside',function($view){
        //     $recentProjects = \App\Projects::orderBy('id','desc')->take(5)->get();
        //     $view->with('recentProjects',$recentProjects);
        // });

        // view()->composer('admin.page.index',function($view){
        //     //$recentProjects = \App\Projects::orderBy('id','desc')->take(5)->get();
        //     $lang = 'en';
        //     $view->with('lang',$lang);
        // });

        Paginator::useBootstrap();

        //Define global variable language to use in view
        if(isset($_GET['lang'])){$lang = $_GET['lang'];}else{$lang = 'en';}

        view()->share('lang', $lang);
        view()->share('myStorage', URL('').'/storage/app/uploads/');
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