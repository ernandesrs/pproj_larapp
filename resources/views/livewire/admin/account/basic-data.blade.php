<x-common.form.form wire:submit="updateBasicData" submit-text="{{ __('words.update') }}"
    submitting-text="{{ __('words.updating') }}">
    <x-slot name="content">

        <x-common.view-partials.user-basic-data />

    </x-slot>
</x-common.form.form>
