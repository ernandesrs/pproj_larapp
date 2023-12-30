@props([
    'contained' => false,
])

<div>
    {{-- buttons in desktop --}}
    <div class="hidden items-center relative rounded-full {{ $contained ? '' : 'lg:flex' }}">
        {{ $slot }}
    </div>

    {{-- button in dropdown on mobile --}}
    <x-customer.dropdown
        location="right"
        size="auto"
        class="{{ $contained ? '' : 'lg:hidden' }}">
        <x-slot name="activator">
            <x-customer.buttons.btn
                prepend-icon="three-dots-vertical"
                variant="light"
                outlined
                flat
                class="{{ $contained ? '' : 'lg:hidden' }}" />
        </x-slot>

        {{-- buttons in mobile --}}
        <div class="flex items-center relative rounded-full">
            {{ $slot }}
        </div>
    </x-customer.dropdown>
</div>
