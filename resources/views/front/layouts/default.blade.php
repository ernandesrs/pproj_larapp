<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - {{ $page['title'] }}</title>

    @vite(['resources/js/front/app.js', 'resources/css/front/app.css'])
</head>

<body>

    <main>
        @yield('content')
    </main>

</body>

</html>
