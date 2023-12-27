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

                        <x-customer.dropdown size="normal" location="right">
                            <x-slot name="activator">
                                <button
                                    class="w-12 h-12 rounded-full text-customer-dark-normal duration-300 relative hover:bg-opacity-80 border border-gray-300">
                                    <x-customer.icon icon="bell" class="2xl" />
                                    <span
                                        class="w-5 h-5 rounded-full text-xs flex items-center justify-center bg-customer-danger-normal text-white absolute top-0 right-0">
                                        3
                                    </span>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                {{-- notifications head --}}
                                <div class="flex justify-between items-center mb-4">
                                    <x-customer.h4 icon="bell-fill" text="Notifications" class="mb-0" />

                                    <span
                                        class="flex items-center justify-center px-3 py-2 rounded-3xl bg-customer-danger-normal text-white text-sm">
                                        <span>Unread</span><span class="pl-1">3</span>
                                    </span>
                                </div>

                                {{-- notifications list --}}
                                <div class="max-h-[60vh] overflow-y-auto">
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
                                                'text' => "Your account needs <span class='font-semibold'>important settings</span>",
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
                                                'text' => "Lorem dolor natus <span class='font-semibold'>sit lodolor</span>",
                                                'read' => true,
                                                'action' => [
                                                    'href' => '#',
                                                    'text' => 'Check now',
                                                ],
                                            ],
                                        ];
                                    @endphp

                                    @foreach ($notifications as $notification)
                                        <div
                                            class="{{ $notification['read'] ? '' : 'bg-customer-light-light-2' }} px-4 py-3 duration-300 flex items-start text-zinc-400 cursor-default mb-2 rounded-xl {{ $notification['read'] ? '' : 'hover:bg-customer-light-normal hover:text-zinc-600' }}">

                                            <x-customer.icon icon="{{ $notification['icon'] ?? 'bell' }}"
                                                class="text-2xl lg:text-3xl mr-4" />
                                            <div class="">
                                                <p class="mb-2">{!! $notification['text'] !!}</p>
                                                @if ($action = $notification['action'] ?? null)
                                                    <div class="text-left">
                                                        @if ($action['external'] ?? false)
                                                            <a class="font-semibold text-sm text-zinc-500 inline-block"
                                                                href="{{ $action['href'] }}"
                                                                target="_{{ $action['external'] ?? null ? 'blank' : 'self' }}">
                                                                {{ $action['text'] }}
                                                            </a>
                                                        @else
                                                            <a wire:navigate
                                                                class="font-semibold text-sm text-zinc-500 inline-block"
                                                                href="{{ $action['href'] }}"
                                                                target="_{{ $action['external'] ?? null ? 'blank' : 'self' }}">
                                                                {{ $action['text'] }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="flex justify-end mt-4">
                                    <x-customer.buttons.btn text="Todas notificações" append-icon="arrow-right"
                                        variant="primary" outlined small />
                                </div>
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
