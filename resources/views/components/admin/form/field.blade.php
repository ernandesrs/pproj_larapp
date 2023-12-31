@props([
    'type' => 'text',
    'label' => null,
    'error' => null,
    'options' => [],
])

@php
    $fieldWrapperStyles = 'w-full';

    $fieldStyles = 'w-full border ' . ($error ? 'border-admin-danger-normal text-admin-danger-dark-2' : '') . ' px-4 py-4 bg-admin-white outline-none duration-300 disabled:opacity-40 focus:bg-admin-white focus:shadow dark:border-admin-dark-normal dark:bg-admin-dark-normal';

    if (!$attributes->has('id')) {
        $attributes = $attributes->merge(['id' => uniqid()]);
    }

@endphp

<div {{ $attributes->only(['class'])->merge(['class' => $fieldWrapperStyles]) }}>

    @if (!empty($label))
        <label
            class="block font-normal text-admin-dark-light-2 text-opacity-50 dark:text-admin-light-dark-2 dark:text-opacity-75 mb-2"
            for="{{ $attributes->get('id') }}">{{ $label }}</label>
    @endif

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

    @if (!empty($error))
        <small class="block mt-2 text-admin-danger-normal">
            {{ $error }}
        </small>
    @endif

</div>
