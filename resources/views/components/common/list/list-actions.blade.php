@props(['actionShow', 'actionEdit', 'actionDelete'])

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

    @if ($actionDelete ?? null)
        <x-common.dialog-activator controls="delete_item_confirmation">
            <x-slot name="activator">
                <x-common.button text="" prepend-icon="trash3-fill" variant="danger-link" small />
            </x-slot>
        </x-common.dialog-activator>
    @endif

    @if ($appendActions ?? null)
        {{ $appendActions }}
    @endif

</div>
