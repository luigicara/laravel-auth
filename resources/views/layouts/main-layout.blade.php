<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Auth</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('components.header')
    @include('components.errors')
    @yield('content')
    {{-- @include('components.footer') --}}
</body>
</html>