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
        @include('components.admin.layout-partials.aside', [
            'navs' => [
                // dashboard
                [
                    'title' => 'Dashboard',
                    'items' => [
                        [
                            'text' => 'General',
                            'href' => route('admin.index'),
                            'activeIn' => ['admin.index'],
                            'icon' => 'pie-chart-fill',
                        ],
                        [
                            'text' => 'Users',
                            'icon' => 'people-fill',
                            'items' => [
                                [
                                    'text' => 'All',
                                    'href' => '',
                                    'icon' => 'caret-right-fill',
                                ],
                                [
                                    'text' => 'Administrators',
                                    'href' => '',
                                    'icon' => 'caret-right-fill',
                                ],
                            ],
                        ],
                        [
                            'text' => 'Roles',
                            'href' => '',
                            'activeIn' => [],
                            'icon' => 'shield-lock-fill',
                        ],
                    ],
                ],
        
                // others
                [
                    'title' => 'Others',
                    'items' => [
                        [
                            'text' => 'Examples',
                            'icon' => 'grid-fill',
                            'activeIn' => [
                                'admin.examples.sections',
                                'admin.examples.buttons',
                                'admin.examples.alerts',
                                'admin.examples.others',
                            ],
                            'items' => [
                                [
                                    'text' => 'Sections',
                                    'href' => route('admin.examples.sections'),
                                    'activeIn' => ['admin.examples.sections'],
                                    'icon' => 'caret-right-fill',
                                ],
                                [
                                    'text' => 'Buttons',
                                    'href' => route('admin.examples.buttons'),
                                    'activeIn' => ['admin.examples.buttons'],
                                    'icon' => 'caret-right-fill',
                                ],
                                [
                                    'text' => 'Alerts',
                                    'href' => route('admin.examples.alerts'),
                                    'activeIn' => ['admin.examples.alerts'],
                                    'icon' => 'caret-right-fill',
                                ],
                                [
                                    'text' => 'Others',
                                    'href' => route('admin.examples.others'),
                                    'activeIn' => ['admin.examples.others'],
                                    'icon' => 'caret-right-fill',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ])
    </div>

    {{-- content side --}}
    <div class="layout-right-side">
        @include('components.admin.layout-partials.header')

        <main class="main">
            <div class="container main-inner">
                <x-common.alert closable />

                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
