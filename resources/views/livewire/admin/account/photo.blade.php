<x-common.form.form wire:submit="uploadPhoto" submit-text="Upload photo" submitting-text="Uploading photo" actions-start>
    <x-slot name="content">
        <x-common.form.input wire:model="photo" type="file" error="{{ $errors->first('photo') }}" />
    </x-slot>
</x-common.form.form>
