<?php

namespace App\Providers;

use ChargeBee\ChargeBee\Environment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Environment::configure(config("chargebee.site"), config("chargebee.api_key"));
    }
}
