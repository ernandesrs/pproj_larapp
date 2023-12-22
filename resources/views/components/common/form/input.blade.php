@props(['type', 'label', 'error'])

@php
    $id = $attributes->get('id') ?? ($attributes->get('name') ?? uniqid());
    $type = $type ?? 'text';
    $label = $label ?? null;
    $error = empty($error ?? null) ? null : $error;
@endphp

<div for="{{ $id }}" class="input-group {{ $error ? 'invalid' : '' }}">
    @if ($label)
        <label class="input-label" for="{{ $id }}">
            {{ $label }}
        </label>
    @endif
    <input type="{{ $type }}" class="input-field" id="{{ $id }}" {{ $attributes }} />
    @if ($error)
        <small class="input-feedback">{{ $error }}</small>
    @endif
</div>
