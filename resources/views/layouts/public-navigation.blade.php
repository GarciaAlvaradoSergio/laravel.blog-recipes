<nav class="bg-white shadow-sm dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('welcome') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>

            <!-- Enlaces de navegación -->
            <div class="flex items-center space-x-4">
                @guest
                    <!-- Enlaces para invitados -->
                    <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Iniciar sesión
                    </a>
                    <a href="{{ route('register') }}" class="text-amber-600 hover:text-amber-500 dark:hover:text-amber-400 px-3 py-2 rounded-md text-sm font-medium">
                        Registrarse
                    </a>
                @else
                    <!-- Enlaces para usuarios autenticados -->
                    <a href="{{ route('profile.edit') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Mi perfil
                    </a>

                    <!-- Botón para cerrar sesión -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-500 dark:hover:text-red-400 px-3 py-2 rounded-md text-sm font-medium">
                            Cerrar sesión
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
