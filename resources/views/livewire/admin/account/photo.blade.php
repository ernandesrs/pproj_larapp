<x-common.form.form wire:submit="uploadPhoto" submit-text="Upload photo" submitting-text="Uploading photo" actions-start>
    @if (\Auth::user()->photo)
        <x-slot name="prependActions">
            <x-common.dialog id="photo_delete_confirmation" title="Deleting your profile photo">
                <x-slot name="content">
                    After confirming, your profile photo cannot be recovered.
                </x-slot>

                <x-slot name="actions">
                    <x-common.button wire:loading.remove wire:click="deletePhoto" text="Confirm" variant="danger" prepend-icon="check-lg" />
                    <x-common.button wire:loading text="Confirm" variant="danger" loading />
                </x-slot>
            </x-common.dialog>
            <x-common.dialog-activator controls="photo_delete_confirmation">
                <x-slot name="activator">
                    <x-common.button text="Delete photo" variant="danger-link" prepend-icon="trash3-fill" />
                </x-slot>
            </x-common.dialog-activator>

        </x-slot>
    @endif
    <x-slot name="content">
        <x-common.form.file wire:model="photo" upload-text="Choose a new photo" error="{{ $errors->first('photo') }}" />
    </x-slot>
</x-common.form.form>
