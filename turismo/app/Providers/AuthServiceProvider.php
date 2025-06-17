<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Las políticas de autorización para la aplicación.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Registra cualquier servicio de autenticación/autorización.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate para validar si el usuario es administrador
        Gate::define('isAdmin', function ($user) {
            return $user->rol === 'admin';
        });
    }
}
