<x-admin.layout.page
    title="{{ __('words.edit') }} {{ strtolower(__('words.user')) }}"
    subtitle="{{ __('admin/phrases.manage_user') }}">

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
            title="{{ __('phrases.basic_data') }}"
            class="col-span-12 lg:col-span-8">

            <x-admin.form.form
                action="update"
                submit-text="{{ __('words.update') }} {{ __('words.user') }}">

                <div class="grid grid-cols-12 gap-6">

                    <x-admin.form.field
                        class="col-span-12 lg:col-span-6"
                        wire:model="data.first_name"
                        type="text"
                        label="{{ __('words.first_name') }}"
                        error="{{ $errors->first('data.first_name') }}" />

                    <x-admin.form.field
                        class="col-span-12 lg:col-span-6"
                        wire:model="data.last_name"
                        type="text"
                        label="{{ __('words.last_name') }}"
                        error="{{ $errors->first('data.last_name') }}" />

                    <x-admin.form.field
                        class="col-span-12 lg:col-span-6"
                        wire:model="data.username"
                        type="text"
                        label="{{ __('words.username') }}"
                        error="{{ $errors->first('data.username') }}" />

                    <x-admin.form.field
                        class="col-span-12 lg:col-span-6"
                        wire:model="data.gender"
                        type="select"
                        label="{{ __('words.gender') }}"
                        :options="[
                            [
                                'label' => __('words.undefined'),
                                'value' => 'n',
                            ],
                            [
                                'label' => __('words.male'),
                                'value' => 'm',
                            ],
                            [
                                'label' => __('words.female'),
                                'value' => 'f',
                            ],
                        ]"
                        error="{{ $errors->first('data.gender') }}" />

                    <x-admin.form.field
                        class="col-span-12"
                        wire:model="data.email"
                        type="text"
                        label="{{ __('words.email') }}"
                        error="{{ $errors->first('data.email') }}"
                        disabled />

                </div>

            </x-admin.form.form>

        </x-admin.section>

        <x-admin.section
            title="{{ __('phrases.security_data') }}"
            class="col-span-12 lg:col-span-8 lg:col-start-5">

            <x-admin.form.form
                action="updatePassword"
                submit-text="{{ __('words.update') }} {{ __('words.user') }}">

                <div class="grid grid-cols-12 gap-6">
                    <x-admin.form.field
                        class="col-span-12 lg:col-span-6"
                        wire:model="data.password"
                        type="password"
                        label="{{ __('words.password') }}"
                        error="{{ $errors->first('data.password') }}" />

                    <x-admin.form.field
                        class="col-span-12 lg:col-span-6"
                        wire:model="data.password_confirmation"
                        type="password"
                        label="{{ __('words.password_confirmation') }}"
                        error="{{ $errors->first('data.password_confirmation') }}" />
                </div>

            </x-admin.form.form>


        </x-admin.section>

    </div>

</x-admin.layout.page>
