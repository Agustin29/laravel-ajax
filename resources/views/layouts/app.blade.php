<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel_AJAX - @yield('title')</title>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @hasSection('navbar')
    <nav>
        @yield('navbar')
    </nav>
    @endif

    <!-- Contenedor principal -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Incluye tu archivo JavaScript al final del cuerpo del documento -->
</body>

</html>