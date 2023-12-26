<x-common.form.form wire:submit="update" submit-text="{{ __('words.update') }}"
    submitting-text="{{ __('words.updating') }}">
    <x-slot name="content">

        <x-common.view-partials.user-password />

    </x-slot>
</x-common.form.form>
