@props([
    'type' => 'text',

    'options' => [],
])

@php
    $baseStyle = 'w-full border border-customer-light-dark-1 py-4 px-8 rounded-full text-customer-dark-light-2';
    $hoverStyle = '';
    $focusStyle = '';

    $fullStyle = implode(' ', [$baseStyle, $hoverStyle, $focusStyle]);
@endphp

@if ($type == 'select')
    <select
        {{ $attributes->merge(['class' => $fullStyle]) }}>
        @foreach ($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['label'] }}</option>
        @endforeach
    </select>
@else
    <input
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $fullStyle]) }} {{ $attributes }}>
@endif
