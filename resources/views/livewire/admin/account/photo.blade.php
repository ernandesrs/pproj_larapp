<x-common.form.form wire:submit="uploadPhoto" submit-text="Upload photo" submitting-text="Uploading photo" actions-start>
    @if (\Auth::user()->photo)
        <x-slot name="prependActions">
            <x-common.button text="Delete photo" variant="danger-link" prepend-icon="trash3-fill" />
        </x-slot>
    @endif
    <x-slot name="content">
        <x-common.form.input wire:model="photo" type="file" error="{{ $errors->first('photo') }}" />
    </x-slot>
</x-common.form.form>
