@props(['label', 'error', 'options'])

@php
    $id = $attributes->get('id') ?? ($attributes->get('name') ?? uniqid());
    $label = $label ?? null;
    $error = empty($error ?? null) ? null : $error;
    $options = $options ?? [];
@endphp

<div for="{{ $id }}" class="input-group {{ $error ? 'invalid' : '' }}">
    @if ($label)
        <label class="input-label" for="{{ $id }}">
            {{ $label }}
        </label>
    @endif
    <select class="input-field" id="{{ $id }}" {{ $attributes }}>
        @foreach ($options as $option)
            <option value="{{ $option['value'] }}">
                {{ $option['text'] }}
            </option>
        @endforeach
    </select>
    @if ($error)
        <small class="input-feedback">{{ $error }}</small>
    @endif
</div>
