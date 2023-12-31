@props([
    'notifications' => [],
])

<x-admin.dropdown
    size="normal"
    location="right">

    {{-- activator --}}
    <x-slot name="activator">
        <x-admin.buttons.clickable
            prepend-icon="bell-fill"
            variant="primary"
            link
            no-transform />
    </x-slot>

    <div class="cursor-default">
        {{-- head --}}
        <div class="flex items-center mb-4">
            <h5 class="font-semibold text-lg dark:text-admin-light-dark-2">
                {{ __('words.notifications') }}
            </h5>

            <span class="block ml-auto rounded px-4 py-2 bg-admin-danger-normal text-admin-white text-sm">
                {{ __('words.unread') }}(10)
            </span>
        </div>

        {{-- list --}}
        <div class=" max-h-[50vh] overflow-y-auto pr-1">
            <div class="bg-admin-light-light-2 dark:bg-admin-dark-normal">
                @foreach ($notifications as $notification)
                    <div
                        class="flex items-start {{ $notification['read'] ? 'hover:bg-admin-light-light-1 dark:text-admin-light-dark-2 dark:hover:bg-transparent' : 'bg-admin-light-light-1 hover:bg-admin-light-normal dark:bg-admin-dark-dark-1 dark:bg-opacity-75 dark:text-admin-light-dark-2 dark:hover:bg-opacity-100' }} group px-4 py-3 mb-2 duration-300">
                        <x-admin.icon
                            class="text-2xl"
                            name="{{ $notification['icon'] }}" />
                        <div class="px-3">
                            <div>
                                {{ $notification['title'] }}
                            </div>

                            @if ($action = $notification['action'] ?? null)
                                <div class="flex">
                                    <a
                                        {{ $action['external'] ?? false ? 'target="_blank"' : 'wire:navigate' }}
                                        href="{{ $action['href'] }}"
                                        title="{{ $action['title'] ?? $action['text'] }}"
                                        class="block py-1 ml-auto font-semibold text-admin-dark-light-2 group-hover:text-admin-primary-normal hover:text-admin-dark-normal duration-300">
                                        {{ $action['text'] }}
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="pl-1 flex flex-wrap">
                            <x-admin.buttons.clickable
                                class="hover:text-admin-dark-normal dark:hover:text-admin-light-normal"
                                prepend-icon="check-lg"
                                variant="light"
                                link
                                xs
                                no-tranform />

                            <x-admin.buttons.clickable
                                class="hover:text-admin-dark-normal dark:hover:text-admin-light-normal"
                                prepend-icon="trash3-fill"
                                variant="light"
                                link
                                xs
                                no-tranform />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- footer --}}
        <div class="mt-4 flex justify-end">
            <x-admin.buttons.clickable
                append-icon="arrow-right"
                text="{{ __('words.all') }} {{ __('words.notifications') }}"
                link
                no-transform />
        </div>
    </div>
</x-admin.dropdown>
