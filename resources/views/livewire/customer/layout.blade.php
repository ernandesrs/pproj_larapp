<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} DASH - {{ $title ?? 'Page Title' }}</title>

    @vite(['resources/js/customer/app.js', 'resources/css/customer/app.css'])
</head>

<body
    x-data="{
        show: false,
    
        init() {
            this.show = window.innerWidth >= 1024 ? true : false;
        },
        sidebarToggle() {
            this.show = !this.show;
        }
    }"
    class="w-full bg-customer-light-normal flex">

    <x-customer.partials.aside
        :items="[
            [
                'title' => 'Admin tools',
                'items' => [
                    [
                        'text' => 'Dashboard',
                        'icon' => 'bar-chart-line-fill',
                        'href' => '#',
                        'activeIn' => ['customer.index'],
                    ],
                    [
                        'text' => 'Wallet',
                        'icon' => 'wallet',
                        'href' => '#',
                    ],
                    [
                        'text' => 'History',
                        'icon' => 'clock-history',
                        'href' => '#',
                    ],
                    [
                        'text' => 'Statements',
                        'icon' => 'journal-text',
                        'href' => '#',
                    ],
                ],
            ],
            [
                'title' => 'Others',
                'items' => [
                    [
                        'text' => 'Account',
                        'icon' => 'person-circle',
                        'href' => '#',
                    ],
                    [
                        'text' => 'Settings',
                        'icon' => 'gear',
                        'href' => '#',
                    ],
                    [
                        'text' => 'Logout',
                        'icon' => 'door-closed',
                        'href' => '#',
                    ],
                ],
            ],
        ]" />

    <div class="flex-1 h-screen">
        <header class="bg-customer-primary-normal h-14 flex items-center">
            <div class="container">
                <div class="flex">
                    <button class="ml-auto" x-on:click="sidebarToggle">MENU</button>
                </div>
            </div>
        </header>

        <main class="overflow-x-auto" style="height: calc(100vh - 3.5rem)">
            <div class="container">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
