<x-admin.layout.page>

    <div class="grid grid-cols-12 gap-6">

        <div class="col-span-full md:col-span-4">

            <x-admin.section
                title="{{ __('phrases.profile_picture') }}"
                class="mb-6">

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

            @if ($this->user->id !== \Auth::user()->id)
                @can(\App\Enums\Admin\UserPermissionsEnum::UPDATE_PERMISSIONS->value)
                    <x-admin.section
                        title="{{ __('admin/phrases.user_roles') }}"
                        class="mb-6">

                        <livewire:admin.users.role
                            :user=$user />

                    </x-admin.section>
                @endcan
            @endif

        </div>

        <div class="col-span-full md:col-span-8">

            <x-admin.section
                title="{{ __('phrases.basic_data') }}"
                class="mb-6">

                <x-admin.form.form
                    action="update"
                    submit-text="{{ __('words.update') }} {{ __('words.user') }}">

                    <x-admin.views.user-basic-data />

                </x-admin.form.form>

            </x-admin.section>

            <x-admin.section
                title="{{ __('phrases.security_data') }}"
                class="mb-6">

                <x-admin.form.form
                    action="updatePassword"
                    submit-text="{{ __('words.update') }} {{ __('words.user') }}">

                    <x-admin.views.user-password />

                </x-admin.form.form>


            </x-admin.section>

        </div>
    </div>

</x-admin.layout.page>
