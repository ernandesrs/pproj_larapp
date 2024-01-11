@props([])

<div class="p-4 border-l border-t border-r bg-admin-light-light-2 dark:bg-admin-dark-dark-1 dark:border-admin-dark-normal">
    <div class="flex items-center relative">

        <div class="flex-1 flex items-center gap-1">

            {{ $slot }}

            <x-admin.form.field
                type="search"
                wire:model="search"
                placeholder="{{ __('words.search_by') }}" />

        </div>

        <x-admin.buttons.clickable
            wire:click="applyFilter"
            type="submit"
            prepend-icon="funnel-fill"
            link
            no-transform
            variant="primary" />

        <span
            wire:target="applyFilter"
            wire:loading
            class="w-full h-full bg-admin-light-light-2 text-admin-dark-light-2 absolute left-0 px-6 py-4 cursor-wait animate-pulse dark:bg-admin-dark-light-2">
            {{ __('words.filtering') }}...
        </span>
    </div>
</div>
