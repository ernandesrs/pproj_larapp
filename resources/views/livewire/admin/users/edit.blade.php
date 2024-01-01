<x-admin.layout.page
    title="{{ __('words.edit') }} {{ strtolower(__('words.user')) }}"
    subtitle="{{ __('admin/phrases.manage_user') }}">

    <x-slot name="actions">

        <x-admin.buttons.clickable
            as="link"
            href="{{ route('admin.users.create') }}"
            prepend-icon="plus-lg"
            variant="success"
            text="{{ __('words.new') }}"
            sm flat />

    </x-slot>

    <div class="grid grid-cols-12 gap-6">

        <x-admin.section
            title="{{ __('phrases.profile_picture') }}"
            class="col-span-12 lg:col-span-4">

            <div class="relative z-10 flex justify-center items-center">
                <x-common.thumb
                    type="avatar"
                    size="extralarge"
                    image="{{ $user->photo ? \Storage::url($user->photo) : '' }}"
                    alternative-text="{{ $user->first_name }}" />

                @if ($user->photo)
                    <x-admin.buttons.confirmation
                        wire-confirm-action="deletePhoto"
                        confirm-text="{{ __('phrases.delete_photo') }}?"
                        button-confirm="{{ __('words.delete') }}"
                        class="absolute bottom-0 translate-y-1/2"
                        variant="danger">
                        <x-admin.buttons.clickable
                            class="rounded-full"
                            prepend-icon="trash3-fill"
                            variant="danger"
                            flat />
                    </x-admin.buttons.confirmation>
                @endif
            </div>

        </x-admin.section>

        <x-admin.section
            title="{{ __('phrases.basic_data') }}"
            class="col-span-12 lg:col-span-8">

            <x-admin.form.form
                action="update"
                submit-text="{{ __('words.update') }} {{ __('words.user') }}">

                <x-admin.views.user-basic-data />

            </x-admin.form.form>

        </x-admin.section>

        <x-admin.section
            title="{{ __('phrases.security_data') }}"
            class="col-span-12 lg:col-span-8 lg:col-start-5">

            <x-admin.form.form
                action="updatePassword"
                submit-text="{{ __('words.update') }} {{ __('words.user') }}">

                <x-admin.views.user-password />

            </x-admin.form.form>


        </x-admin.section>

    </div>

</x-admin.layout.page>
