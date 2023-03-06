<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use App\Models\Model;
use Illuminate\Support\Facades\View;
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
    

    View::composer(['nameView'], function ($view) {
            $view->with('nameValue', Model::where('created_at', '<', now())->get());
            #nameValue = اسمی که میخواهیم متغیر ما با این شناختعه شود
        });
    }
}
