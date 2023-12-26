<x-admin.page
    title="{{ $title }}"
    :breadcrumbs="[
        [
            'text' => __('words.users'),
            'href' => route('admin.users'),
        ],
        [
            'text' => __('words.register'),
            'href' => route('admin.users.create'),
        ],
    ]">
    <x-slot name="content">

        <x-common.form.form wire:submit="register" submit-text="{{ __('words.register') }} {{ __('words.user') }}">
            <x-slot name="content">
                <x-common.view-partials.user-basic-data />
                <div class="py-3"></div>
                <x-common.view-partials.user-password />
            </x-slot>
        </x-common.form.form>

    </x-slot>
</x-admin.page>
