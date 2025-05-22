<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    <!-- Optional Dark Mode Support (custom class or toggle later) -->
    <style>
        body.dark-mode {
            background-color: #1a202c;
            color: #e2e8f0;
        }

        .dark-mode .bg-white {
            background-color: #2d3748 !important;
        }

        .dark-mode .text-dark {
            color: #e2e8f0 !important;
        }

        .dark-mode .shadow {
            box-shadow: 0 1px 2px rgba(255, 255, 255, 0.1) !important;
        }
    </style>
</head>

<body class="font-sans">
    <div class="min-vh-100 bg-light" id="app">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white shadow py-3">
            <div class="container">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main class="py-4">
            <div class="container">
                {{ $slot }}
            </div>
        </main>
    </div>
    <!-- Optional: Script to toggle dark mode -->
    <script>
        // Simple dark mode toggle example
        const darkModeToggle = () => {
            document.body.classList.toggle('dark-mode');
        };
    </script>
</body>

</html>