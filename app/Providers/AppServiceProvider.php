<?php

namespace App\Providers;

use App\Tag;
use Illuminate\Support\ServiceProvider;
use Laravel\Telescope\TelescopeServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }
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
