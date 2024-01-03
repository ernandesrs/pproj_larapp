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
        <div class="flex justify-between items-center mb-6">
            <x-customer.h4 icon="bell-fill" text="{{ __('words.notifications') }}" class="!mb-0" />

            <span
                class="flex items-center justify-center px-3 py-2 rounded-3xl bg-customer-danger-normal text-white text-sm">
                <span>{{ __('words.unread') }}</span><span class="pl-1">{{ $unread }}</span>
            </span>
        </div>

        {{-- notifications list --}}
        <div class="max-h-[60vh] overflow-y-auto">
            @if (count($notifications))
                @foreach ($notifications as $notification)
                    <x-customer.layout.notification.notification-item
                        show-delete
                        icon="{{ $notification['icon'] }}"
                        :read="$notification['read'] ?? false"
                        text="{{ $notification['text'] }}"
                        :action="$notification['action'] ?? []" />
                @endforeach
            @else
                <div class="border text-center rounded-xl py-4">
                    <x-customer.p muted class="text-xl !mb-0">
                        0 {{ strtolower(__('words.notifications')) }}
                    </x-customer.p>
                </div>
            @endif
        </div>

        {{-- footer --}}
        <div class="flex justify-end mt-4">
            <x-customer.buttons.btn text="{{ __('words.all') }} {{ __('words.notifications') }}"
                append-icon="arrow-right"
                variant="primary" link small no-transform />
        </div>
    </x-slot>
</x-customer.dropdown>
