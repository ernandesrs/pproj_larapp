@props(['id', 'icon', 'title', 'text', 'closeText', 'medium', 'large', 'full', 'persistent'])

@php
    if (!($id ?? null)) {
        throw new \Exception('Needs a id prop. This id must be unique and must be informed to the dialog activating component via the "controls" prop.');
    }
    $medium = $medium ?? false;
    $large = $large ?? false;
    $full = $full ?? false;
    $icon = $icon ?? null;
    $title = $title ?? null;
    $text = $text ?? null;
    $closeText = $closeText ?? __('words.close');
@endphp

<div
    x-data="{
        ...{{ json_encode([
            'id' => $id,
            'showWrapper' => false,
            'showContent' => false,
            'persistent' => $persistent ?? false,
            'data' => [
                'icon' => $icon,
                'title' => $title,
                'text' => $text,
            ],
        ]) }},
    
        activatorClicked(e) {
            if (e.detail?.controls != this.id) {
                return;
            }
    
            this.data = e.detail?.dataInfo ?? this.data;
    
            this.show();
        },
        wrapperClick(e) {
            if ($el != e.target || this.persistent) {
                return;
            }
    
            this.close();
        },
        show() {
            this.showWrapper = true;
    
            setTimeout(() => {
                this.showContent = true;
            }, 200);
        },
        close() {
            this.showContent = false;
    
            setTimeout(() => {
                this.showWrapper = false;
            }, 100);
        }
    }"

    @alert_activator_clicked.window="activatorClicked"
    x-on:click="wrapperClick"

    x-show="showWrapper"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"

    id="{{ $id }}" class="dialog" style="display: none;" {{ $attributes }}>

    {{-- dialog inner --}}
    <div
        x-show="showContent"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-110"
        class="dialog-inner dialog-inner-{{ $medium ? 'medium' : ($large ? 'large' : ($full ? 'full' : '')) }}"
        role="alert">

        {{-- header --}}
        <div x-show="data.title" class="dialog-header">
            <span x-show="data.icon" class="dialog-icon">
                <i :class="'bi bi-' + data.icon"></i>
            </span>

            <h4 class="dialog-title" x-text="data.title"></h4>
        </div>

        {{-- body --}}
        <div class="dialog-body">
            <template x-if="data.text">
                <p x-text="data.text"></p>
            </template>
            <template x-if="!data.text">
                <div>
                    {{ $content ?? null }}
                </div>
            </template>
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
