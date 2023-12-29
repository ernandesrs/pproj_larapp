@props([
    'showActionCreate' => false,
    'actionCreate' => [
        'variant' => 'light',
        'icon' => 'plus-lg',
        'text' => __('words.create') . ' ' . __('words.new'),
        'href' => null,
    ],
])
<div>
    {{-- buttons in desktop --}}
    <x-customer.buttons.btn-group
        class="hidden lg:flex">
        {{ $slot }}

        @if ($showActionCreate ? ($create = $actionCreate) : false)
            <x-customer.buttons.btn
                as="{{ $create['href'] ?? null ? 'link' : 'button' }}"
                prepend-icon="{{ $create['icon'] }}"
                text="{{ $create['text'] }}"
                variant="{{ $create['variant'] }}"
                flat
                class="{{ $slot->isEmpty() ? '' : 'rounded-none rounded-tr-full rounded-br-full' }}" />
        @endif
    </x-customer.buttons.btn-group>

    {{-- button in dropdown on mobile --}}
    <x-customer.dropdown
        location="right"
        size="auto"
        class="lg:hidden">
        <x-slot name="activator">
            <x-customer.buttons.btn
                prepend-icon="three-dots-vertical"
                variant="light"
                outlined
                flat
                class="lg:hidden" />
        </x-slot>

        {{-- buttons in mobile --}}
        <x-customer.buttons.btn-group>
            {{ $slot }}

            @if ($showActionCreate ? ($create = $actionCreate) : false)
                <x-customer.buttons.btn
                    as="{{ $create['href'] ?? null ? 'link' : 'button' }}"
                    prepend-icon="{{ $create['icon'] }}"
                    text="{{ $create['text'] }}"
                    variant="{{ $create['variant'] }}"
                    flat
                    class="{{ $slot->isEmpty() ? '' : 'rounded-none rounded-tr-full rounded-br-full' }}" />
            @endif
        </x-customer.buttons.btn-group>
    </x-customer.dropdown>
</div>
