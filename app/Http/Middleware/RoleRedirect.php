<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleRedirect
{
    /**
     * Middleware que verifica si el usuario tiene el rol requerido para acceder a la ruta.
     * 
     * Este middleware:
     * 1. Comprueba si el rol del usuario autenticado coincide con el rol requerido
     * 2. Redirige al dashboard general si el usuario no tiene el rol requerido
     * 3. Permite continuar con la solicitud si el usuario tiene el rol correcto
     *
     * @param \Illuminate\Http\Request $request Solicitud HTTP entrante
     * @param \Closure $next Función para continuar con el siguiente middleware/controlador
     * @param string $role Rol requerido para acceder a la ruta
     * @return \Illuminate\Http\Response Redirección al dashboard o respuesta de la solicitud
     * 
     * @throws \Illuminate\Auth\AuthenticationException Si no hay usuario autenticado
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Verifica si el rol del usuario no coincide con el rol requerido
        if ($request->user()->role !== $role) {
            // Redirige al dashboard general si no tiene los permisos
            return redirect()->route('welcome');
        }

        // Continúa con la solicitud si el usuario tiene el rol correcto
        return $next($request);
    }
}
