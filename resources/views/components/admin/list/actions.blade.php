@props([
    'wireActionShow' => null,
    'actionShowPermission' => null,
    'wireActionEdit' => null,
    'actionEditPermission' => null,
    'wireActionDelete' => null,
    'actionDeletePermission' => null,
    'deleteConfirmText' => __('words.delete') . ' ' . strtolower(__('words.user')) . '?',
])

<div
    {{ $attributes->only(['class'])->merge(['class' => 'flex flex-wrap items-center justify-center h-full']) }}>

    @if ($prependActions ?? null)
        {{ $prependActions }}
    @endif

    {{-- default actions --}}
    @if ($wireActionShow)
        @can($actionShowPermission)
            <x-admin.buttons.clickable
                as="{{ strpos($wireActionShow, 'http') === false ? 'button' : 'link' }}"
                :href="strpos($wireActionShow, 'http') === false ? '' : $wireActionShow"
                wire:click="{{ strpos($wireActionShow, 'http') === false ? $wireActionShow : '' }}"
                prepend-icon="eye-fill"
                variant="primary"
                sm
                link
                no-transform />
        @endcan
    @endif

    @if ($wireActionEdit)
        @can($actionEditPermission)
            <x-admin.buttons.clickable
                as="{{ strpos($wireActionEdit, 'http') === false ? 'button' : 'link' }}"
                :href="strpos($wireActionEdit, 'http') === false ? '' : $wireActionEdit"
                wire:click="{{ strpos($wireActionEdit, 'http') === false ? $wireActionEdit : '' }}"
                prepend-icon="pencil-fill"
                variant="info"
                sm
                link
                no-transform />
        @endcan
    @endif

    @if ($wireActionDelete)
        @can($actionDeletePermission)
            <x-admin.buttons.confirmation
                wireConfirmAction="{{ $wireActionDelete }}"
                confirmText="{{ $deleteConfirmText }}"
                location="right"
                sm>
                <x-admin.buttons.clickable
                    prepend-icon="trash3-fill"
                    variant="danger"
                    sm link no-transform />
            </x-admin.buttons.confirmation>
        @endcan
    @endif

    @if ($appendActions ?? null)
        {{ $appendActions }}
    @endif

</div>
