<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Middleware default untuk grup web...
        ],

        'api' => [
            // Middleware default untuk grup API...
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Middleware default lainnya...

        'admin' => \App\Http\Middleware\AdminMiddleware::class, // Tambahkan ini
    ];
}
