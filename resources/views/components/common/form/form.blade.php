@props(['submitText', 'submittingText', 'noActions', 'actionsStart', 'actionsEnd'])

@php
    $submitText = $submitText ?? 'Submit';
    $submittingText = $submittingText ?? 'Wait...';
    $noActions = $noActions ?? false;
    $actionsStart = $actionsStart ?? false;
    $actionsEnd = $actionsEnd ?? false;
@endphp

<form {{ $attributes }}>
    {{ $content }}

    @if (!$noActions)
        <div class="flex mt-8">
            <div
                class="basis-full flex {{ $actionsStart ? 'justify-start' : ($actionsEnd ? 'justify-end' : 'justify-center') }} items-center gap-3">
                @isset($prependActions)
                    {{ $prependActions }}
                @endisset
                <x-common.button wire:loading.remove type="submit" prepend-icon="check-lg" text="{{ $submitText }}" />
                <x-common.button wire:loading type="submit" text="{{ $submittingText }}" loading />
                @isset($appendActions)
                    {{ $appendActions }}
                @endisset
            </div>
        </div>
    @endif
</form>
