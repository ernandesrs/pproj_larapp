<x-common.form.form wire:submit="uploadPhoto" submit-text="{{ __('phrases.upload_photo') }}"
    submitting-text="{{ __('phrases.uploading_photo') }}" actions-start>
    @if (\Auth::user()->photo)
        <x-slot name="prependActions">
            <x-common.confirmation-dialog type="danger" id="photo_delete_confirmation"
                title="{{ __('messages.confirmation.deleting_photo.title') }}"
                text="{{ __('messages.confirmation.deleting_photo.message') }}" confirm-action="deletePhoto" />

            <x-common.dialog-activator controls="photo_delete_confirmation">
                <x-slot name="activator">
                    <x-common.button text="{{ __('phrases.delete_photo') }}" variant="danger-link"
                        prepend-icon="trash3-fill" />
                </x-slot>
            </x-common.dialog-activator>

        </x-slot>
    @endif
    <x-slot name="content">
        <x-common.form.file wire:model="photo" upload-text="Choose a new photo" error="{{ $errors->first('photo') }}" />
    </x-slot>
</x-common.form.form>
