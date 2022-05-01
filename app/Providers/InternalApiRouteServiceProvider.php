<?php

namespace App\Providers;

use App\BodyRouter\BodyRouterServiceProvider;
use App\BodyRouter\Router;
use Illuminate\Support\Facades\Route;

class InternalApiRouteServiceProvider extends BodyRouterServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Router::setActionKey('interface.name');

        $this->routes(function () {
            Route::group([], base_path('routes/interface.php'));
        });
    }
}
