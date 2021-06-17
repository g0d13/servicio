<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Scripts -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" defer></script>
    <script src="{{asset('js/all.min.js')}}" defer></script>
</head>
<body>
@include('layouts.navigation')

<!-- Page Heading -->
<header>
    <div>
        {{ $header }}
    </div>
</header>

<!-- Page Content -->
<main>
    {{ $slot }}
</main>
</body>
</html>