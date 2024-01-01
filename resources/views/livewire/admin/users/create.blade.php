<x-admin.layout.page
    :breadcrumbs="[
        [
            'label' => __('words.users'),
            'route' => [
                'name' => 'admin.users',
            ],
        ],
        [
            'label' => __('words.new'),
            'route' => [
                'name' => 'admin.users.create',
            ],
        ],
    ]"
    title="{{ __('words.register') }} {{ strtolower(__('words.user')) }}"
    subtitle="{{ __('admin/phrases.manage_user') }}">

    <x-admin.section>

        <x-admin.form.form
            action="register"
            submit-text="{{ __('words.register') }} {{ __('words.user') }}">

            <x-admin.views.user-basic-data />

            <div class="mt-8"></div>

            <x-admin.views.user-password />

        </x-admin.form.form>

    </x-admin.section>

</x-admin.layout.page>
