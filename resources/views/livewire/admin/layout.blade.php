<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin {{ config('app.name') }} - {{ $title ?? '' }}</title>

    @vite(['resources/js/admin/app.js', 'resources/css/admin/app.css'])
</head>

<body
    x-data="{
        show_sidebar: false,
    
        init() {
            this.show_sidebar = window.innerWidth >= 1024 ? true : false;
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

    class="flex bg-admin-light-light-2">

    <x-admin.layout-partials.sidebar
        :navigations="[
            // 1
            [
                'title' => __('words.dashboard'),
                'items' => [
                    [
                        'text' => __('words.overview'),
                        'icon' => 'pie-chart',
                        'href' => '',
                        'external' => false,
                        'activeIn' => ['admin.index'],
                    ],
                    [
                        'text' => __('words.users'),
                        'icon' => 'people-fill',
                        'href' => '',
                        'external' => false,
                        'activeIn' => ['admin.users', 'admin.users.create', 'admin.users.show', 'admin.users.edit'],
                    ],
                ],
            ],
        
            // 2
            [
                'title' => __('words.others'),
                'items' => [
                    [
                        'text' => 'Profile',
                        'icon' => 'person-fill',
                        'href' => '',
                        'external' => false,
                        'activeIn' => ['admin.profile'],
                    ],
                    [
                        'text' => __('words.logout'),
                        'icon' => 'door-closed-fill',
                        'href' => '',
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
