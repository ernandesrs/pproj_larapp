@props(['submitText', 'submittingText', 'noActions'])

@php
    $submitText = $submitText ?? 'Submit';
    $submittingText = $submittingText ?? 'Wait...';
    $noActions = $noActions ?? false;
@endphp

<form {{ $attributes }}>
    {{ $content }}

    @if (!$noActions)
        <div class="flex mt-8">
            <div class="basis-full flex justify-center items-center">
                <x-common.button wire:loading.remove type="submit" prepend-icon="check-lg" text="{{ $submitText }}" />
                <x-common.button wire:loading type="submit" text="{{ $submittingText }}" loading />
            </div>
        </div>
    @endif
</form>
