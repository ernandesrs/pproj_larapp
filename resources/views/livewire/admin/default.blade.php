<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} ADMIN - {{ $title ?? '' }}</title>

    @vite(['resources/js/admin/app.js', 'resources/css/admin/app.css'])
</head>

<body>

    {{-- sidebar side --}}
    <div class="layout-left-side" id="jsSidebar">
        @include('livewire.admin.default.aside')
    </div>

    {{-- content side --}}
    <div class="layout-right-side">
        @include('livewire.admin.default.header')

        <main class="main">
            <div class="container main-inner">
                <x-common.alert closable />

                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
