<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Los eventos de la aplicación y sus listeners.
     *
     * @var array
     */
    protected $listen = [
        // Aquí puedes registrar tus eventos
    ];

    /**
     * Registrar los eventos para la aplicación.
     */
    public function boot(): void
    {
        //
    }
}
