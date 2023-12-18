@props(['type', 'id', 'name', 'label'])

@php
    $inputClass = 'form-input';

    if ($errors->has($name)) {
        $inputClass .= ' form-input-invalid';
    }

@endphp

<div class="form-group">
    <label class="form-input-label sr-only" for="{{ $id ?? $name }}">{{ $label }}</label>

    <input type="{{ $type ?? 'text' }}" class="{{ $inputClass }}" name="{{ $name }}" id="{{ $id ?? $name }}"
        placeholder="{{ $label }}" {{ $attributes ?? null }} />
    @error($name)
        <small class="form-input-feedback">{{ $message }}</small>
    @enderror
</div>
