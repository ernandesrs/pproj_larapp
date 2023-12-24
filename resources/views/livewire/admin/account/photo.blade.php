<x-common.form.form wire:submit="uploadPhoto" submit-text="Upload photo" submitting-text="Uploading photo" actions-start>
    @if (\Auth::user()->photo)
        <x-slot name="prependActions">
            <x-common.confirmation-dialog type="danger" id="photo_delete_confirmation" title="Deleting your profile photo"
                text="After confirming, your profile photo cannot be recovered." confirm-action="deletePhoto" />

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
