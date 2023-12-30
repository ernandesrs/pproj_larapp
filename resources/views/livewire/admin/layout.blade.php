<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin {{ config('app.name') }} - {{ $title ?? '' }}</title>

    @vite(['resources/js/admin/app.js', 'resources/css/admin/app.css'])
</head>

<body>

    {{ $slot }}

</body>

</html>
