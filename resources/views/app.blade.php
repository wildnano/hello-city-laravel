<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>
</head>

<body>
    @yield('content')
    {{ config('project.slogan') }}
    <footer>
        <p>&copy; Copyright {{ date('Y') }} 
            @if(! Route::is('app_about'))
            &middot; <a href="{{ route('app_about') }}">About Us</a>
            @endif
        </p>
    </footer>
</body>

</html>