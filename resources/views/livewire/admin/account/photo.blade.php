<x-common.form.form wire:submit="uploadPhoto" submit-text="Upload photo" submitting-text="Uploading photo">
    <x-slot name="content">

        <div x-data class="flex flex-wrap items-center">
            <x-common.thumb size="extralarge" image="{{ $currentPhoto }}"
                alternative-text="{{ \Auth::user()->first_name }}" />

            <div class="ml-4">
                <x-common.form.input wire:model="photo" type="file" error="{{ $errors->first('photo') }}" />
            </div>
        </div>

    </x-slot>
</x-common.form.form>
