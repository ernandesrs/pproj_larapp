<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin {{ config('app.name') }} - {{ $title ?? '' }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/admin/logo_dark.png') }}" type="image/x-icon">

    @vite(['resources/js/admin/app.js', 'resources/css/admin/app.css'])
</head>

<body
    x-data="{
        show_sidebar: false,
        current_theme: 'light',
    
        init() {
            this.show_sidebar = window.innerWidth >= 1024 ? true : false;
            this.current_theme = window.adminTheme.getTheme();
        },
        toggleTheme() {
            window.adminTheme.toggleTheme();
            this.current_theme = window.adminTheme.getTheme();
        },
        toggleSidebar() {
            this.show_sidebar ? this.closeSidebar() : this.showSidebar();
        },
        showSidebar() {
            this.show_sidebar = true;
        },
        closeSidebar() {
            this.show_sidebar = false;
        },
        sidebarStatus() {
            if (window.innerWidth <= 1024 && this.show_sidebar) {
                this.show_sidebar = false;
            } else if (window.innerWidth > 1024 && !this.show_sidebar) {
                this.show_sidebar = true;
            }
        }
    }"
    @resize.window="sidebarStatus"

    class="flex bg-admin-light-light-2 dark:bg-admin-dark-dark-2 dark:text-admin-light-dark-1 dark:text-opacity-75">

    <x-admin.layout.sidebar.sidebar
        :navigations="[
            // 1
            [
                'title' => __('words.dashboard'),
                'items' => [
                    [
                        'text' => __('words.overview'),
                        'icon' => 'pie-chart-fill',
                        'href' => route('admin.index'),
                        'external' => false,
                        'activeIn' => ['admin.index'],
                    ],
                    [
                        'text' => __('words.users'),
                        'icon' => 'people-fill',
                        'href' => route('admin.users'),
                        'external' => false,
                        'activeIn' => ['admin.users', 'admin.users.create', 'admin.users.show', 'admin.users.edit'],
                        'permissionsNeeded' => [\App\Enums\Admin\UserPermissionsEnum::VIEW_ANY->value],
                    ],
                    [
                        'text' => __('words.roles'),
                        'icon' => 'person-fill-gear',
                        'href' => route('admin.roles'),
                        'external' => false,
                        'activeIn' => ['admin.roles', 'admin.roles.create', 'admin.roles.show', 'admin.roles.edit'],
                        'permissionsNeeded' => [\App\Enums\Admin\RolePermissionsEnum::VIEW_ANY->value],
                    ],
                ],
            ],
        
            // 2
            [
                'title' => __('words.others'),
                'items' => [
                    [
                        'text' => __('words.examples'),
                        'icon' => 'grid-fill',
                        'activeIn' => ['admin.examples.sections', 'admin.examples.buttons'],
                        'items' => [
                            [
                                'text' => 'Sections',
                                'icon' => 'grid-fill',
                                'href' => route('admin.examples.sections'),
                                'external' => false,
                                'activeIn' => ['admin.examples.sections'],
                            ],
                            [
                                'text' => 'Buttons',
                                'icon' => 'grid-fill',
                                'href' => route('admin.examples.buttons'),
                                'external' => false,
                                'activeIn' => ['admin.examples.buttons'],
                            ],
                            [
                                'text' => 'Other #2',
                                'icon' => 'grid-fill',
                                'href' => '#',
                                'external' => false,
                                'activeIn' => [],
                            ],
                        ],
                    ],
                    [
                        'text' => __('phrases.my_account'),
                        'icon' => 'person-fill',
                        'href' => route('admin.account'),
                        'external' => false,
                        'activeIn' => ['admin.account'],
                    ],
                    [
                        'text' => __('words.logout'),
                        'icon' => 'door-closed-fill',
                        'href' => route('auth.logout'),
                        'external' => false,
                    ],
                ],
            ],
        ]" />

    <x-admin.layout.content>
        {{ $slot }}
    </x-admin.layout.content>

</body>

</html>
