<?php

namespace App\Providers;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    // Resto del código...

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('super_administrador', function (User $user) {
            return $user->privilegio === 'super_administrador';
        });
    }
}