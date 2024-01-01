@props([
    'breadcrumbs' => [],
    'icon' => null,
    'title' => null,
    'subtitle' => null,
    'contained' => false,
])

@php
    if (count($breadcrumbs)) {
        $breadcrumbs = [
            [
                'icon' => 'house-fill',
                'label' => null,
                'route' => [
                    'name' => 'admin.index',
                    'params' => [],
                ],
            ],
            ...$breadcrumbs,
        ];
    }
@endphp

<div class="flex-1 flex flex-col py-6">
    {{-- page header --}}
    <div class="flex flex-wrap items-center pb-6">
        <div class="basis-full md:basis-6/12 xl:basis-5/12">
            @if (count($breadcrumbs))
                <nav class="mb-2 flex items-center gap-x-3">
                    @php
                        $next = 0;
                    @endphp
                    @foreach ($breadcrumbs as $bread)
                        <a
                            wire:navigate
                            class="inline-block text-admin-primary-light-1 duration-300 hover:text-admin-primary-dark-2"
                            href="{{ route($bread['route']['name'], $bread['route']['params'] ?? []) }}"
                            title="{{ $bread['title'] ?? $bread['label'] }}">
                            @if ($bread['icon'] ?? null)
                                <x-admin.icon name="{{ $bread['icon'] }}" />
                            @else
                                {{ $bread['label'] }}
                            @endif
                        </a>

                        @if (isset($breadcrumbs[$next + 1]))
                            <x-admin.icon
                                name="chevron-right"
                                class="text-xs text-admin-light-dark-2" />
                        @endif
                        @php
                            $next++;
                        @endphp
                    @endforeach
                </nav>
            @endif

            {{-- page header title --}}
            @if (!empty($title))
                <div
                    class="font-medium flex items-center text-admin-dark-normal dark:text-admin-light-dark-1">
                    @if ($icon)
                        <x-admin.icon name="{{ $icon }}"
                            class="mr-3 hidden sm:inline-block text-4xl xl:text-5xl" />
                    @endif
                    <div>
                        <h1 class="text-xl font-semibold xl:text-2xl">
                            {{ $title }}
                        </h1>
                        @if (!empty($subtitle))
                            <p
                                class="text-base text-admin-dark-light-2 dark:text-admin-light-dark-2 text-opacity-75 mt-1">
                                {{ $subtitle }}
                            </p>
                        @endif
                    </div>
                </div>
            @endif
        </div>

        {{-- page header actions --}}
        @if ($actions ?? null)
            <div
                class="basis-full md:basis-6/12 xl:basis-7/12 mt-4 flex items-center justify-start md:mt-0 md:justify-end">
                {{ $actions }}
            </div>
        @endif
    </div>

    {{-- page content --}}
    <div
        class="flex-1 {{ !$contained ? '' : 'border dark:border-admin-dark-normal bg-admin-light-light-2 dark:bg-admin-dark-normal dark:bg-opacity-10 py-4 px-6' }}">
        {{ $slot }}
    </div>
</div>
