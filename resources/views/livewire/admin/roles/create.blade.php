<x-admin.layout.page>

    {{-- page content --}}
    <x-admin.form.form
        action="save"
        submitText="{{ __('words.register') }} {{ __('words.role') }}">
        <x-admin.views.role-fields />
    </x-admin.form.form>

</x-admin.layout.page>
