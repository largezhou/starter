<?php

namespace App\BodyRouter;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Route;

class BodyRouterServiceProvider extends RouteServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Route::$validators = [new BodyActionValidator()];

        $this->app->singleton('router', function ($app) {
            return new Router($app['events'], $app);
        });

        parent::register();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->routes(function () {
        //     Route::group([], base_path('routes/body_action_routes.php'));
        // });
    }
}
