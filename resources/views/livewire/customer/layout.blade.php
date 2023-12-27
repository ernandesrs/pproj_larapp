<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} DASH - {{ $title ?? 'Page Title' }}</title>

    @vite(['resources/js/customer/app.js', 'resources/css/customer/app.css'])
</head>

<body>

    <main>
        {{ $slot }}
    </main>

</body>

</html>
