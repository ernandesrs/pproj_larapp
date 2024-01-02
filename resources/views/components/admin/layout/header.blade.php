@props([])

<header
    class="flex items-center bg-admin-light-light-1 dark:bg-admin-dark-dark-2 border-b dark:border-admin-dark-normal h-16">
    <div class="container">
        <div class="flex items-center">
            <div>
                {{--  --}}
            </div>

            <div class="ml-auto flex items-center gap-1">
                <div class="flex items-center gap-1 text-admin-dark-light-2">
                    <x-admin.buttons.clickable
                        x-on:click="toggleTheme"
                        x-show="current_theme=='light'"
                        prepend-icon="moon-fill"
                        variant="dark"
                        link
                        no-transform />

                    <x-admin.buttons.clickable
                        x-on:click="toggleTheme"
                        x-show="current_theme=='dark'"
                        prepend-icon="brightness-high-fill"
                        variant="light"
                        link
                        no-transform />

                    <x-admin.layout.notification
                        :notifications="[
                            [
                                'icon' => 'person-fill-exclamation',
                                'title' => 'You have something important on the customer dashboard.',
                                'read' => false,
                                'action' => [
                                    'text' => 'Go to my dashboard',
                                    'href' => route('customer.index'),
                                ],
                            ],
                            [
                                'icon' => 'google',
                                'title' => 'This is a example of a notification with external link.',
                                'read' => false,
                                'action' => [
                                    'text' => 'Go to Google',
                                    'external' => true,
                                    'href' => 'https://google.com',
                                ],
                            ],
                            [
                                'icon' => 'person-fill-x',
                                'title' => 'Attention! Your account has something important to do.',
                                'read' => true,
                                'action' => [
                                    'text' => 'Go to account',
                                    'href' => route('admin.account'),
                                ],
                            ],
                            [
                                'icon' => 'rocket-takeoff-fill',
                                'title' => 'This is lorem ipsum dolor sit read notification example.',
                                'read' => false,
                            ],
                            [
                                'icon' => 'rocket-takeoff-fill',
                                'title' => 'This is lorem ipsum dolor sit read notification example.',
                                'read' => true,
                            ],
                            [
                                'icon' => 'rocket-takeoff-fill',
                                'title' => 'This is lorem ipsum dolor sit read notification example.',
                                'read' => true,
                            ],
                        ]" />
                </div>

                <button
                    x-on:click="toggleSidebar"
                    class="text-3xl w-12 h-12 flex items-center justify-center">
                    <x-admin.icon name="list" />
                </button>
            </div>
        </div>
    </div>
</header>
