@props(['actionShow', 'actionEdit'])

<div class="flex gap-1">

    @if ($prependActions ?? null)
        {{ $prependActions }}
    @endif

    @if ($actionShow ?? null)
        <x-common.button as="link" href="{{ $actionShow }}" text=""
            prepend-icon="eye-fill"
            variant="primary-link" small />
    @endif

    @if ($actionEdit ?? null)
        <x-common.button as="link" href="{{ $actionEdit }}" text=""
            prepend-icon="pencil-square"
            variant="info-link" small />
    @endif

    @if ($appendActions ?? null)
        {{ $appendActions }}
    @endif

</div>
