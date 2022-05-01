<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\ServiceProvider;

class MultiEntryRouteServiceProvider extends ServiceProvider
{
    protected array $typeProviderMap = [
        'cloudapi' => CloudApiRouteServiceProvider::class,
        'internal_api' => InternalApiRouteServiceProvider::class,
        '' => RouteServiceProvider::class,
    ];

    /**
     * Register services.
     *
     * @return void
     * @throws Exception
     */
    public function register()
    {
        foreach ($this->typeProviderMap as $type => $providerClass) {
            if (env('ROUTE_TYPE', '') === $type) {
                $this->app->register($providerClass);
            }
        }
    }
}
