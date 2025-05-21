<!-- resources/views/layouts/public.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Bienvenido' }} - {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles') <!-- Para estilos específicos de páginas -->
</head>

<body class="font-sans antialiased bg-white dark:bg-gray-900">

    @include('layouts.public-navigation')


    <main class="min-h-[calc(100vh-9rem)]"> <!-- Ajuste para altura considerando nav y footer -->
        {{ $slot }}
    </main>

    @stack('scripts') <!-- Para scripts específicos de páginas -->
</body>

</html>