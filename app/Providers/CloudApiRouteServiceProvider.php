<?php

namespace App\Providers;

use App\BodyRouter\BodyRouterServiceProvider;
use App\BodyRouter\Router;
use Illuminate\Support\Facades\Route;

class CloudApiRouteServiceProvider extends BodyRouterServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Router::setActionKey('Action');

        $this->routes(function () {
            Route::group([], base_path('routes/cloudapi.php'));
        });
    }
}
