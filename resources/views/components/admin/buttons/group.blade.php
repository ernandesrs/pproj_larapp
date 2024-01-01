@props([
    'contained' => false,
])

<div>
    {{-- buttons in desktop --}}
    <div class="hidden items-center relative rounded-full {{ $contained ? '' : 'lg:flex' }}">
        {{ $slot }}
    </div>

    {{-- button in dropdown on mobile --}}
    <x-admin.dropdown
        location="right"
        size="auto"
        class="{{ $contained ? '' : 'lg:hidden' }}">
        <x-slot name="activator">
            <x-admin.buttons.clickable
                prepend-icon="three-dots-vertical"
                variant="light"
                link
                no-transform
                class="{{ $contained ? '' : 'lg:hidden' }}" />
        </x-slot>

        {{-- buttons in mobile --}}
        <div class="flex items-center relative rounded-full">
            {{ $slot }}
        </div>
    </x-admin.dropdown>
</div>
