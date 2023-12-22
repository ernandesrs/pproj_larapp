@props(['submitText', 'submittingText'])

@php
    $submitText = $submitText ?? 'Submit';
    $submittingText = $submittingText ?? 'Wait...';
@endphp

<form {{ $attributes }}>
    {{ $content }}

    <div class="flex mt-8">
        <div class="basis-full flex justify-center items-center">
            <x-common.button wire:loading.remove type="submit" prepend-icon="check-lg" text="{{ $submitText }}" />
            <x-common.button wire:loading type="submit" text="{{ $submittingText }}" loading />
        </div>
    </div>
</form>
