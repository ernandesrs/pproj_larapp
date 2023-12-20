@props(['closable'])

@php
    $session = \App\Helpers\Alert::getFlash();

    $alertFromSession = [
        'show' => false,
        'has' => $session['text'] ?? null ? true : false,
        'float' => $session['float'] ?? false,
        'type' => $session['type'] ?? 'default',
        'title' => $session['title'] ?? null,
        'text' => $session['text'] ?? null,
        'closable' => $closable ?? false,
        'style' => 'alert alert-' . ($session['type'] ?? 'default') . ($session['float'] ?? false ? ' alert-float' : ''),
    ];
@endphp

<div x-data="{
    ...{{ json_encode($alertFromSession) }},
    init(e) {
        $nextTick(() => {
            this.show = this.has;
        });
    },
    alertFromAlertEvent(event) {
        let newAlert = event.detail[0] ?? null;

        if (!newAlert) {
            return;
        }

        if (this.show) {
            this.show = false;

            setTimeout(() => {
                this.add(newAlert);
            }, 200);
        } else {
            this.add(newAlert);
        }
    },
    close() {
        this.show = false;

        setTimeout(() => {
            this.remove();
        }, 200);
    },
    add(newAlert) {
        this.type = newAlert.type;
        this.float = newAlert.float;
        this.has = newAlert.text ? true : false;
        this.show = this.has ? true : false;
        this.title = newAlert.title;
        this.text = newAlert.text;

        this.style = 'alert alert-' + (this.type ?? 'default') + (this.float ?? false ? ' alert-float' : '');
    },
    remove() {
        this.type = 'default';
        this.float = false;
        this.has = false;
        this.show = false;
        this.title = null;
        this.text = null;

        this.style = null;
    }
}" @alert.window="alertFromAlertEvent" x-show="show" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-110 -translate-y-full" x-transition:enter-end="opacity-100 scale-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100 translate-y-0"
    x-transition:leave-end="opacity-0 scale-110 -translate-y-full" :class="style" role="alert" {{ $attributes }}>
    <div class="flex items-start gap-4">
        {{-- icon --}}
        <span class="alert-icon">
            <template x-if="type == 'success'">
                <i class="bi bi-check-circle"></i>
            </template>
            <template x-if="type == 'error'">
                <i class="bi bi-x-circle"></i>
            </template>
            <template x-if="type == 'danger'">
                <i class="bi bi-exclamation-circle"></i>
            </template>
            <template x-if="type == 'info'">
                <i class="bi bi-exclamation-circle"></i>
            </template>
            <template x-if="type == 'default'">
                <i class="bi bi-exclamation-circle"></i>
            </template>
        </span>

        {{-- title/text --}}
        <div class="flex-1">
            <template x-if="title">
                <strong class="alert-title" x-text="title"></strong>
            </template>

            <p class="alert-text" x-text="text"></p>
        </div>

        {{-- close button --}}
        <template x-if="closable">
            <button x-on:click="close" class="text-front-dark-ligth-2 text-opacity-50 transition hover:text-opacity-70">
                <span class="sr-only">Dismiss popup</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </template>
    </div>
</div>
