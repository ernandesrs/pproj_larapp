<div class="flex flex-col gap-y-10 py-4">

    <div class="relative z-10 flex justify-center items-center">
        <x-common.thumb
            type="avatar"
            size="extralarge"
            image="{{ \Auth::user()->photo ? \Storage::url(\Auth::user()->photo) : '' }}"
            alternative-text="{{ \Auth::user()->first_name }}" />

        @if (\Auth::user()->photo)
            <x-admin.buttons.confirmation
                wire-confirm-action="deletePhoto"
                confirm-text="{{ __('phrases.delete_photo') }}?"
                button-confirm="{{ __('words.delete') }}"
                class="absolute bottom-0 translate-y-1/2"
                variant="danger">
                <x-slot name="activator">
                    <x-admin.buttons.clickable
                        class="rounded-full"
                        prepend-icon="trash3-fill"
                        variant="danger"
                        flat />
                </x-slot>
            </x-admin.buttons.confirmation>
        @endif
    </div>

    <div class="relative z-0">
        <x-admin.form.form
            action="uploadPhoto"
            submitText="{{ __('phrases.upload_photo') }}"
            submittingText="{{ __('phrases.uploading_photo') }}">
            <x-admin.form.field
                upload-field-text="{{ __('phrases.choose_a_photo') }}"
                wire:model="data.photo"
                type="file"
                error="{{ $errors->first('data.photo') }}" />
        </x-admin.form.form>
    </div>

</div>
