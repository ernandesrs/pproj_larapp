<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin {{ config('app.name') }} - {{ $title ?? '' }}</title>

    @vite(['resources/js/admin/app.js', 'resources/css/admin/app.css'])
</head>

<body
    x-data="{
        show_sidebar: false,
        current_theme: 'light',
    
        init() {
            this.show_sidebar = window.innerWidth >= 1024 ? true : false;
            this.current_theme = localStorage.getItem('admin_theme') ?? 'light';
            this.setTheme();
        },
        setTheme() {
            document.querySelector('html').setAttribute('theme', this.current_theme);
        },
        toggleTheme() {
            this.current_theme = this.current_theme == 'light' ? 'dark' : 'light';
            localStorage.setItem('admin_theme', this.current_theme);
            this.setTheme();
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

    <x-admin.layout-partials.sidebar
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
                    ],
                    [
                        'text' => __('words.examples'),
                        'icon' => 'grid-fill',
                        'href' => route('admin.examples'),
                        'external' => false,
                        'activeIn' => ['admin.examples'],
                    ],
                ],
            ],
        
            // 2
            [
                'title' => __('words.others'),
                'items' => [
                    [
                        'text' => __('words.account'),
                        'icon' => 'person-fill',
                        'href' => route('admin.profile'),
                        'external' => false,
                        'activeIn' => ['admin.profile'],
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

    <x-admin.layout-partials.content>
        {{ $slot }}
    </x-admin.layout-partials.content>

</body>

</html>
