<x-admin.layout.page title="{{ __('words.register') }} {{ strtolower(__('words.user')) }}"
    subtitle="{{ __('admin/phrases.manage_user') }}">

    <x-admin.section>

        <x-admin.form.form
            action="register"
            submit-text="{{ __('words.register') }} {{ __('words.user') }}">

            <x-common.views.user-basic-data />

            <div class="mt-6"></div>

            <x-common.views.user-password />

        </x-admin.form.form>

    </x-admin.section>

</x-admin.layout.page>
