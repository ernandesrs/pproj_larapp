<x-admin.layout.page
    title="{{ __('words.edit') }} {{ strtolower(__('words.user')) }}"
    subtitle="{{ __('admin/phrases.manage_user') }}">

    <div class="grid grid-cols-12 gap-6">

        <x-admin.section
            class="col-span-12 sm:col-span-6 lg:col-span-4">

            <div class="relative z-10 flex justify-center items-center">
                <x-common.thumb
                    type="avatar"
                    size="extralarge"
                    image="{{ $user->photo ? \Storage::url($user->photo) : '' }}"
                    alternative-text="{{ $user->first_name }}" />

                @if ($user->photo)
                    <x-admin.buttons.confirmation
                        wire-confirm-action=""
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
            class="col-span-12 sm:col-span-6 lg:col-span-8">

            

        </x-admin.section>

    </div>

</x-admin.layout.page>
