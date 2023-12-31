@props([
    'type' => 'text',
    'options' => [],
])

@php

    $fieldWrapperStyles = 'w-full';

    $fieldStyles = 'w-full border px-4 py-4 bg-admin-light-light-2 outline-none duration-300 disabled:opacity-40 focus:bg-admin-white focus:shadow dark:border-admin-dark-normal dark:bg-admin-dark-normal';

@endphp

<div {{ $attributes->only(['class'])->merge(['class' => $fieldWrapperStyles]) }}>

    @if ($type == 'select')
        <select
            class="{{ $fieldStyles }}"
            {{ $attributes->exceptProps(['class']) }}>

            @foreach ($options as $option)
                <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
            @endforeach

        </select>
    @else
        <input
            class="{{ $fieldStyles }}"
            type="{{ $type }}"
            {{ $attributes->exceptProps(['class']) }} />
    @endif

</div>
