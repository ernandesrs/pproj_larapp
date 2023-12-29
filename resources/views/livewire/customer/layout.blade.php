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
                        'href' => route('customer.index'),
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
                        'href' => route('customer.account'),
                        'activeIn' => ['customer.account'],
                    ],
                    [
                        'text' => 'Settings',
                        'icon' => 'gear',
                        'href' => '#',
                    ],
                    [
                        'text' => 'Logout',
                        'icon' => 'door-closed',
                        'href' => route('auth.logout'),
                    ],
                ],
            ],
        ]" />

    <div class="flex-1 h-screen pt-4">
        <header class="h-14 flex items-center">
            <div class="container">
                <div class="flex items-center">
                    {{-- left side --}}
                    <div class="flex items-center">
                    </div>

                    {{-- right side --}}
                    <div class="ml-auto flex gap-x-4">

                        @php
                            $notifications = [
                                [
                                    'icon' => 'shield-check',
                                    'text' => 'Your account has been granted administrator acess',
                                    'read' => false,
                                    'action' => [
                                        'href' => route('admin.index'),
                                        'text' => 'Go to admin',
                                    ],
                                ],
                                [
                                    'icon' => 'person-exclamation',
                                    'text' => 'Your account needs important settings',
                                    'read' => false,
                                    'action' => [
                                        'href' => route('customer.index'),
                                        'text' => 'Go to profile',
                                    ],
                                ],
                                [
                                    'icon' => 'google',
                                    'text' => 'External link: go to google',
                                    'read' => false,
                                    'action' => [
                                        'external' => true,
                                        'href' => 'https://google.com.br',
                                        'text' => 'Go to Google',
                                    ],
                                ],
                                [
                                    'icon' => 'award',
                                    'text' => 'Lorem dolor natus sit lodolor',
                                    'read' => true,
                                ],
                                [
                                    'icon' => 'app',
                                    'text' => 'Dolor lorem natus sit lodolor',
                                    'read' => true,
                                ],
                                [
                                    'icon' => 'activity',
                                    'text' => 'Lorem dolor natus sit lodolor',
                                    'read' => true,
                                ],
                                [
                                    'icon' => 'calendar2-event',
                                    'text' => 'Lorem dolor natus sit lodolor',
                                    'read' => true,
                                    'action' => [
                                        'href' => '#',
                                        'text' => 'Check now',
                                    ],
                                ],
                            ];
                        @endphp
                        <x-customer.partials.notification.notification-dropdown
                            :notifications="$notifications" />

                        <button
                            class="ml-auto bg-gradient-to-b from-customer-primary-dark-2 to-customer-primary-normal w-12 h-12 rounded-full text-white duration-300 hover:bg-opacity-80"
                            x-on:click="sidebarToggle">
                            <x-customer.icon x-show="!show" icon="list" class="text-2xl" />
                            <x-customer.icon x-show="show" icon="list-nested" class="text-2xl" />
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="overflow-y-auto overflow-x-hidden" style="height: calc(100vh - (3.5rem + 2rem))">
            <div class="container py-4 min-h-full flex flex-col">
                <x-common.alert closable />

                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
