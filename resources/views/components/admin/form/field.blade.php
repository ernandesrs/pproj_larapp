@props([
    'type' => 'text',
    'label' => null,
    'error' => null,
    'options' => [],

    'uploadButtonText' => __('words.upload'),
    'uploadFieldText' => __('phrases.choose_a_file'),
])

@php
    $fieldWrapperStyles = 'w-full';

    $fieldStyles = 'w-full border ' . ($error ? 'border-admin-danger-normal text-admin-danger-dark-2' : '') . ' px-4 py-4 bg-admin-white outline-none duration-300 disabled:opacity-40 focus:bg-admin-white focus:shadow dark:border-admin-dark-normal dark:bg-admin-dark-normal focus:dark:bg-admin-dark-light-1';

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
        <div class="relative">
            @if ($type == 'file')
                <span
                    class="{{ $fieldStyles }} flex items-center absolute h-full bottom-0 left-0 pointer-events-none px-0 py-0 overflow-hidden">
                    <span
                        class="inline-flex items-center h-full bg-admin-light-normal px-6 font-medium text-admin-dark-light-2 dark:bg-admin-dark-normal dark:text-admin-light-dark-2 dark:text-opacity-60">
                        {{ $uploadButtonText }}
                    </span>
                    <span
                        class="inline-flex items-center w-full h-full bg-admin-white px-6 text-admin-dark-light-2 dark:bg-admin-dark-light-1 dark:text-admin-light-dark-2">
                        {{ $uploadFieldText }}
                    </span>
                </span>
            @endif

            <input
                class="{{ $fieldStyles }} {{ $type == 'file' ? '!opacity-0' : '' }}"
                type="{{ $type }}"
                {{ $attributes->exceptProps(['class']) }} />
        </div>
    @endif

    @if (!empty($error))
        <small class="block mt-2 text-admin-danger-normal">
            {{ $error }}
        </small>
    @endif

</div>
