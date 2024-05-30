<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProviders extends ServiceProvider
{
    public function register()
    {
        // Register any authentication / authorization services here
    }

    public function boot()
    {
        $this->registerPolicies();

        Auth::viaRequest('custom-token', function ($request) {
            // Implement custom authentication logic here
            // Example: Check token from request and return user
        });
    }
}