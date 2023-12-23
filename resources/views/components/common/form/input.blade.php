@props(['type', 'label', 'error', 'uploadButtonText', 'uploadText'])

@php
    $id = $attributes->get('id') ?? ($attributes->get('name') ?? uniqid());
    $type = $type ?? 'text';
    $label = $label ?? null;
    $uploadButtonText = empty($uploadButtonText) ? 'Upload' : $uploadButtonText;
    $uploadText = empty($uploadText) ? 'Choose a file' : $uploadText;
    $error = empty($error ?? null) ? null : $error;
@endphp

<div class="input-group {{ $error ? 'invalid' : '' }}">
    @if ($label)
        <label class="input-label" for="{{ $id }}">
            {{ $label }}
        </label>
    @endif
    <div class="relative">
        @if ($type == 'file')
            <div class="input-file {{ $attributes->has('disabled') ? 'input-file-disabled' : '' }}">
                <span>{{ $uploadButtonText }}</span>
                <span>{{ $uploadText }}</span>
            </div>
        @endif

        <input type="{{ $type }}" class="input-field {{ $type == 'file' ? '!opacity-0' : '' }}"
            id="{{ $id }}" {{ $attributes }} />
    </div>
    @if ($error)
        <small class="input-feedback">{{ $error }}</small>
    @endif
</div>
