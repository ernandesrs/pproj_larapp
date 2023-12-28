@props([
    'notifications' => [],
])

@php
    $unread = count(
        array_filter($notifications, function ($n) {
            return !($n['read'] ?? false);
        }),
    );
@endphp

<x-customer.dropdown size="normal" location="right">
    {{-- activator --}}
    <x-slot name="activator">
        <button
            class="w-12 h-12 rounded-full text-customer-dark-normal duration-300 relative hover:bg-opacity-80 border border-gray-300">
            <x-customer.icon icon="bell" class="2xl" />
            <span
                class="w-5 h-5 rounded-full text-xs flex items-center justify-center bg-customer-danger-normal text-white absolute top-0 right-0">
                {{ $unread }}
            </span>
        </button>
    </x-slot>

    {{-- content --}}
    <x-slot name="content">
        {{-- notifications head --}}
        <div class="flex justify-between items-center mb-4">
            <x-customer.h4 icon="bell-fill" text="Notifications" class="mb-0" />

            <span
                class="flex items-center justify-center px-3 py-2 rounded-3xl bg-customer-danger-normal text-white text-sm">
                <span>Unread</span><span class="pl-1">{{ $unread }}</span>
            </span>
        </div>

        {{-- notifications list --}}
        <div class="max-h-[60vh] overflow-y-auto">
            @foreach ($notifications as $notification)
                <x-customer.partials.notification.notification-item
                show-delete
                    :active="$notification['active'] ?? false"
                    text="{{ $notification['text'] }}"
                    :action="$notification['action'] ?? []" />
            @endforeach
        </div>

        {{-- footer --}}
        <div class="flex justify-end mt-4">
            <x-customer.buttons.btn text="Todas notificações" append-icon="arrow-right"
                variant="primary" link small no-transform />
        </div>
    </x-slot>
</x-customer.dropdown>
