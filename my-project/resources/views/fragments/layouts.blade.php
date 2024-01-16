<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portafolio</title>
    <!-- Styles -->
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('fragments.header')
    <main class="container mx-auto p-4">
        <!-- Contenido principal de la página -->
        @yield('content')
    </main>
    @include('fragments.footer')
</body>
</html>
