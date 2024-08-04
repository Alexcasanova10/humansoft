<?php

namespace App\Providers;
use App\Models\Event;

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
        view()->composer('template', function ($view) {
            $eventCount = Event::count();
            $events = Event::all();
            $view->with(compact('eventCount', 'events'));
        });
    }
}
