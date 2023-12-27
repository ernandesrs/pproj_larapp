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

    <div class="flex-1 h-screen pt-4 px-4">
        <header class="h-14 flex items-center mb-4">
            <div class="container">
                <div class="flex items-center">
                    {{-- left side --}}
                    <div class="flex items-center">
                    </div>

                    {{-- right side --}}
                    <div class="ml-auto flex gap-x-4">

                        <x-customer.dropdown size="small" location="right">
                            <x-slot name="activator">
                                <button
                                    class="w-12 h-12 rounded-full text-customer-dark-normal duration-300 relative hover:bg-opacity-80 border border-gray-300">
                                    <x-customer.icon icon="bell" class="2xl" />
                                    <span
                                        class="w-5 h-5 rounded-full text-xs flex items-center justify-center bg-front-primary-normal text-white absolute top-0 right-0">4</span>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum tempora soluta
                                    repellendus porro animi laborum ipsa libero reprehenderit quae quasi corrupti
                                    molestias voluptatem dolore, voluptates exercitationem molestiae blanditiis
                                    veritatis. Animi.
                                </p>
                            </x-slot>
                        </x-customer.dropdown>

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

        <main class="overflow-y-auto overflow-x-hidden p-4" style="height: calc(100vh - (3.5rem + 2rem))">
            <div class="container">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
