<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - {{ $page['title'] }}</title>

    @vite(['resources/js/auth/app.js', 'resources/css/auth/app.css'])
</head>

<body>

    <main class="w-full h-screen flex justify-center items-center p-4">
        <div class="w-full max-w-lg shadow-lg rounded p-5">
            <div class="my-3 py-2">
                <h1 class="text-2xl font-bold text-center text-front-dark">{{ $page['title'] }}</h1>
            </div>
            <div class="">
                @yield('content')
            </div>
        </div>
    </main>

</body>

</html>
