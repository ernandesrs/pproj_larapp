@props([])

<div class="mb-6 relative">
    <form class="flex">

        <div class="flex-1 grid grid-cols-12">

            {{ $slot }}

            <x-admin.form.field
                class="col-start-9 col-span-4"
                type="search"
                wire:model="search"
                placeholder="{{ __('words.search_by') }}" />

        </div>

        <x-admin.buttons.clickable
            type="submit"
            prepend-icon="search"
            flat variant="light" />

        <span
            wire:loading
            class="w-full h-full flex items-center bg-admin-light-light-2 bg-opacity-50 text-admin-dark-light-2 absolute left-0 px-6 cursor-wait animate-pulse">
            {{ __('words.filtering') }}...
        </span>
    </form>
</div>
