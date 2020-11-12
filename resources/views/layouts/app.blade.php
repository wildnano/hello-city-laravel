<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <title>@yield('title', config('app.name'))</title> --}}
    {{-- <title>{{ $title ?? config('app.name')}}</title> --}}
    {{-- <title>{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name') }}</title> --}}
    <title>{{ page_title($title ?? null) }}</title>
</head>

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


<body class="py-6 flex flex-col justify-between items-center min-h-screen">
    <main role="main" class="flex flex-col justify-center items-center">
        @yield('content')
    </main>

    @include('layouts/partials/_footer')
</body>

</html>