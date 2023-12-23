@props(['as', 'uploadButtonText', 'uploadText', 'error'])

<x-common.form.input type="file" upload-button-text="{{ $uploadButtonText ?? null }}"
    upload-text="{{ $uploadText ?? null }}" error="{{ $error ?? null }}" {{ $attributes }} />
