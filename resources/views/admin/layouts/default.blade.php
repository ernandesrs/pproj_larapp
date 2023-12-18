<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} ADMIN - {{ $page['title'] }}</title>

    @vite(['resources/js/admin/app.js', 'resources/css/admin/app.css'])
</head>

<body>

    {{-- sidebar side --}}
    <div
        class="layout-left-side">
        @include('admin.layouts.default.aside')
    </div>

    {{-- content side --}}
    <div class="layout-right-side">
        @include('admin.layouts.default.header')

        <main class="container main">
            <div class="main-inner">
                @yield('content')
            </div>
        </main>
    </div>

</body>

</html>
