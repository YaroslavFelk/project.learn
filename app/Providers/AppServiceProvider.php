<?php

namespace App\Providers;

use App\Tag;
use Illuminate\Support\ServiceProvider;
use Schema;

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
            'layout.aside',
            function ($view) {
                $view->with('tagsCloud', Tag::has('posts')->get());
            }
        );
    }
}
