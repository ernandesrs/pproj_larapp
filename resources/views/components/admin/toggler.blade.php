@props([
    'active' => false,
])

@php
    $id = uniqid();

    if ($active) {
        $attributes = $attributes->merge(['checked' => true]);
    }
@endphp

<label
    for="{{ $id }}"
    class="relative h-8 w-16 cursor-pointer [-webkit-tap-highlight-color:_transparent]">
    <input
        type="checkbox"
        id="{{ $id }}"
        class="peer sr-only [&:checked_+_span_i[data-checked-icon]]:block [&:checked_+_span_i[data-unchecked-icon]]:hidden"
        {{ $attributes }} />

    <span
        class="absolute inset-y-0 start-1 z-10 inline-flex items-center justify-center rounded-full text-admin-light-dark-2 transition-all peer-checked:start-9 peer-checked:text-admin-white dark:text-admin-light-dark-2 dark:text-opacity-50">

        <x-admin.icon
            class="text-2xl"
            data-unchecked-icon
            name="plus-circle-fill" />

        <x-admin.icon
            class="hidden text-2xl"
            data-checked-icon
            name="check-circle-fill" />
    </span>

    <span
        class="absolute inset-0 rounded-full bg-admin-light-normal transition peer-checked:bg-admin-success-normal dark:bg-admin-dark-light-1"></span>
</label>
