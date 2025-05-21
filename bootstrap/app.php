<?php

use App\Http\Middleware\RoleRedirect;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    // Configuración del sistema de enrutamiento
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',      // Rutas web
        commands: __DIR__ . '/../routes/console.php', // Rutas de comandos Artisan
        health: '/up',                          // Ruta para health checks
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
