<div class="flex flex-col items-center gap-y-8">

    <div class="relative flex items-center justify-center">
        <x-common.thumb
            type="avatar"
            size="extralarge"
            image="{{ \Auth::user()->photo ? \Storage::url(\Auth::user()->photo) : null }}"
            alternative-text="{{ \Auth::user()->first_name }}" />

        @if (\Auth::user()->photo)
            <x-customer.buttons.btn
                wire:click="deletePicture"
                wire:confirm="{{ __('messages.confirmation.deleting_photo_text') }}" prepend-icon="trash3-fill"
                variant="danger"
                no-transform class="absolute -bottom-4" />
        @endif
    </div>

    <x-customer.form.form
        action="uploadPicture"
        submitText="{{ __('words.update') }} {{ __('words.picture') }}">
        <x-customer.form.field
            wire:model="data.photo"
            type="file"
            error="{{ $errors->first('data.photo') }}" />
    </x-customer.form.form>

</div>
