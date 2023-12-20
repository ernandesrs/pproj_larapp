@props(['show', 'icon', 'title', 'closeText'])

@php
    $show = $show ?? false;
    $icon = $icon ?? null;
    $title = $title ?? null;
    $closeText = $closeText ?? 'Close';
@endphp

<div x-data="{
    ...{{ json_encode([
        'show' => $show,
        'showContent' => false,
    ]) }},

    init() {
        setTimeout(() => {
            this.showContent = true;
        }, 100);
    },

    close() {

        this.showContent = false;
        setTimeout(() => {
            this.show = false;
        }, 100);
    }
}" class="dialog" x-show="show" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">

    <div x-show="showContent" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-110" class="dialog-inner" role="alert">
        @if ($title)
            <div class="dialog-header">
                @if ($icon)
                    <span class="dialog-icon">
                        <i class="bi bi-{{ $icon }}"></i>
                    </span>
                @endif

                <h4 class="dialog-title">{{ $title }}</h4>
            </div>
        @endif

        <div class="dialog-body">
            {{ $content ?? null }}
        </div>

        <div class="dialog-footer">
            @if ($actions ?? null)
                {{ $actions }}
            @endif

            <div class="ml-auto">
                <button x-on:click="close" class="button button-danger-link">
                    <i class="bi bi-x-lg mr-2"></i> <span>{{ $closeText }}</span>
                </button>
            </div>
        </div>
    </div>

</div>
