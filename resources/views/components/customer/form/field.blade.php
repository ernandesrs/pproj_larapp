@props([
    'type' => 'text',
    'label' => null,
    'error' => null,

    'options' => [],
])

@php

    $wrapperStyle = 'w-full';

    $fieldStyle = 'w-full border bg-customer-light-light-2 ' . (empty($error) ? 'border-customer-light-dark-2 text-customer-dark-light-2 text-opacity-70' : 'border-customer-danger-normal text-customer-danger-normal') . ' px-6 py-4 rounded-xl';

    if (!$attributes->has('id')) {
        $attributes = $attributes->merge(['id' => uniqid()]);
    }
@endphp

<div
    {{ $attributes->only(['class'])->merge([
        'class' => $wrapperStyle,
    ]) }}>

    {{-- label --}}
    @if ($label)
        <label class="block mb-2 font-medium text-customer-dark-light-2"
            for="{{ $attributes->first('id') }}">{{ $label }}</label>
    @endif

    {{-- field --}}
    @if ($type == 'select')
        <select
            class="{{ $fieldStyle }}"
            {{ $attributes->exceptProps(['class']) }}>
            @foreach ($options as $option)
                <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
            @endforeach
        </select>
    @else
        <input
            class="{{ $fieldStyle }}"
            type="{{ $type }}"
            {{ $attributes->exceptProps(['class']) }}>
    @endif

    {{-- feedback --}}
    @if (!empty($error))
        <small class="text-xs text-customer-danger-normal block mt-1 ml-1">{{ $error }}</small>
    @endif

</div>
