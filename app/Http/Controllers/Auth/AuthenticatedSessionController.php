<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Autentica al usuario y lo redirige al dashboard correspondiente según su rol.
     *
     * Este método se encarga de:
     * 1. Autenticar al usuario usando las credenciales proporcionadas en la solicitud
     * 2. Regenerar el ID de sesión para prevenir fijación de sesión
     * 3. Redirigir al usuario a la ruta adecuada según su rol después del login
     *
     * @param \App\Http\Requests\LoginRequest $request Solicitud de login validada
     * @return \Illuminate\Http\RedirectResponse Redirección al dashboard correspondiente
     * @throws \Illuminate\Validation\ValidationException Si la autenticación falla
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Autentica al usuario con las credenciales proporcionadas
        $request->authenticate();

        // Regenera el ID de sesión por seguridad (protección contra session fixation)
        $request->session()->regenerate();

        // Redirige al usuario según su rol
        switch ($request->user()->role) {
            case 'admin':
                // Redirige al dashboard de administrador
                return redirect()->intended(route('admin.dashboard', absolute: false));
            case 'autor':
                // Redirige al dashboard de autor
                return redirect()->intended(route('autor.dashboard', absolute: false));
            default:
                // Redirige al dashboard por defecto para otros roles
                return redirect()->intended(route('dashboard', absolute: false));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
