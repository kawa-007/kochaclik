<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * El path de redirección después del login.
     */
    public const HOME = '/home';

    /**
     * Este método se ejecuta al inicializar las rutas.
     */
    public function boot(): void
    {
        $this->mapRoutes();
    }

    /**
     * Mapea todas las rutas del sistema.
     */
    protected function mapRoutes(): void
    {
        $this->mapWebRoutes();
        $this->mapApiRoutes();
    }

    /**
     * Define las rutas web.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define las rutas API.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }
}
