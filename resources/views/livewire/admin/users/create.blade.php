<x-admin.layout.page>

    <x-admin.section>

        <x-admin.form.form
            action="save"
            submit-text="{{ __('words.register') }} {{ __('words.user') }}">

            <x-admin.views.user-basic-data />

            <div class="mt-8"></div>

            <x-admin.views.user-password />

        </x-admin.form.form>

    </x-admin.section>

</x-admin.layout.page>
