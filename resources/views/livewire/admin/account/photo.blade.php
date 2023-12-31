<div class="flex flex-col py-4">

    <div class="relative flex justify-center items-center">
        <x-common.thumb
            type="avatar"
            size="extralarge"
            image="{{ \Auth::user()->photo ? \Storage::url(\Auth::user()->photo) : '' }}"
            alternative-text="{{ \Auth::user()->first_name }}" />

        @if (\Auth::user()->photo)
            <x-admin.buttons.clickable
                wire:confirm="{{ __('phrases.deleting_photo') }}, {{ strtolower(__('phrases.confirm_to_continue')) }}."
                wire:click="deletePhoto"
                class="absolute bottom-0 translate-y-1/2 rounded-full"
                prepend-icon="trash3-fill"
                variant="danger"
                flat />
        @endif
    </div>

    <div class="pt-14">
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
