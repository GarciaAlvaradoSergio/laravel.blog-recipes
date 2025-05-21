<?php

use App\Http\Middleware\RoleRedirect;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    // Configuración del sistema de enrutamiento
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',      // Rutas web
        commands: __DIR__ . '/../routes/console.php', // Rutas de comandos Artisan
        health: '/up',                          // Ruta para health checks
        // Configuración adicional de rutas
        then: function () {
            // Grupo de rutas para administrador
            Route::middleware(['web', 'auth', 'role:admin']) // Middleware requirido
                ->prefix('administrator')                    // Prefijo URL (/administrator/...)
                ->as('admin.')                               // Prefijo para nombres de rutas
                ->group(base_path('routes/admin.php'));      // Archivo de rutas especificas
            // Grupo de rutas para autor
            Route::middleware(['web', 'auth', 'role:autor'])
                ->prefix('autor')
                ->as('autor.')
                ->group(base_path('routes/autor.php'));
        }
    )
    // Configuración de middlewares
    ->withMiddleware(function (Middleware $middleware) {
        // Registra alias para middlewares personalizados
        $middleware->alias([
            'role' => RoleRedirect::class,  // Alias 'role' para el middleware de redirección por rol
        ]);
    })
    // Configuración de manejo de excepciones
    ->withExceptions(function (Exceptions $exceptions) {
        // Se pueden registrar manejadores personalizados para excepciones
    })
    // Crea la instancia de la aplicación
    ->create();
