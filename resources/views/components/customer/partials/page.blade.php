@props([
    'title' => 'Title via prop title',
])

<div class="bg-customer-white px-8 py-8 rounded-3xl border border-customer-light-dark-1">

    {{-- page head --}}
    <div class="flex items-center mb-6">
        <div>
            <x-customer.h1 text="{{ $title }}" class="!mb-0" />
        </div>

        <div class="flex items-center gap-2 ml-auto">
            <x-customer.buttons.btn text="Button" variant="primary" outlined no-bg />
            <x-customer.buttons.btn text="Button" variant="primary" />
        </div>
    </div>

    {{-- page content --}}
    <div class="">
        {{ $slot }}
    </div>

</div>
