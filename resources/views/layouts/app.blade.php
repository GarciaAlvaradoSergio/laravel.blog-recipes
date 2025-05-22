<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    
    {{-- Estilos de Bootstrap desde Vite --}}
    @vite(['resources/js/app.js'])
</head>
<body>

    {{-- Navbar de Bootstrap --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mi App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido dinámico --}}
    <main class="container mt-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <small>&copy; {{ date('Y') }} - Mi App Laravel con Bootstrap</small>
        </div>
    </footer>

</body>
</html>
    