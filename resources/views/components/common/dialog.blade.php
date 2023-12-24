@props(['id', 'icon', 'title', 'closeText', 'medium', 'large', 'full', 'persistent'])

@php
    if (!($id ?? null)) {
        throw new \Exception('Needs a id prop. This id must be unique and must be informed to the dialog activating component via the "controls" prop.');
    }
    $medium = $medium ?? false;
    $large = $large ?? false;
    $full = $full ?? false;
    $icon = $icon ?? null;
    $title = $title ?? null;
    $closeText = $closeText ?? __('words.close');
@endphp

<div x-data="{
    ...{{ json_encode([
        'id' => $id,
        'showWrapper' => false,
        'showContent' => false,
        'persistent' => $persistent ?? false,
    ]) }},

    showAlert(e) {
        let controls = e.detail?.controls;

        if (controls != this.id) {
            return;
        }

        this.showWrapper = true;

        setTimeout(() => {
            this.showContent = true;
        }, 200);
    },
    dialogWrapperClick(e) {
        if ($el != e.target) {
            return;
        }

        if (!this.persistent) {
            this.close();
        }
    },
    close() {
        this.showContent = false;

        setTimeout(() => {
            this.showWrapper = false;
        }, 100);
    }
}" @alert_activator_clicked.window="showAlert" x-on:click="dialogWrapperClick" class="dialog"
    x-show="showWrapper" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" id="{{ $id }}"
    {{ $attributes }}>

    <div x-show="showContent" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-110"
        class="dialog-inner dialog-inner-{{ $medium ? 'medium' : ($large ? 'large' : ($full ? 'full' : '')) }}"
        role="alert">

        {{-- header --}}
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

        {{-- body --}}
        <div class="dialog-body">
            {{ $content ?? null }}
        </div>

        {{-- footer --}}
        <div class="dialog-footer">
            @if ($actions ?? null)
                {{ $actions }}
            @endif

            <div class="sm:ml-auto">
                <x-common.button x-on:click="close" text="{{ $closeText }}" prepend-icon="x-lg"
                    variant="danger-link" />
            </div>
        </div>
    </div>

</div>
