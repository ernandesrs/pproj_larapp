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
    timer: 3500,
    time: 0,
    timerHandler: null,
    progress: 0,
    progressHandler: null,
    init(e) {
        $nextTick(() => {
            this.show = this.has;
            if (this.show) {
                $dispatch('showed');
            }
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
                this.remove();
                this.add(newAlert);
            }, 200);
        } else {
            this.add(newAlert);
        }
    },
    startProgress() {
        if (!this.float) {
            return;
        }

        this.progressHandler = setInterval(() => {
            this.progress += 1;
        }, this.timer / 100);

        this.timerHandler = setInterval(() => {
            if (this.time >= this.timer) {
                this.close();
            } else {
                this.time += this.timer / 100;
            }
        }, this.timer / 100);
    },
    pauseProgress() {
        if (!this.float) {
            return;
        }

        clearInterval(this.progressHandler);
        clearInterval(this.timerHandler);
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

        setTimeout(() => {
            $dispatch('showed');
        }, 300)
    },
    remove() {
        clearInterval(this.progressHandler);
        clearInterval(this.timerHandler);
        this.time = 0;
        this.progress = 0;

        this.type = 'default';
        this.float = false;
        this.has = false;
        this.show = false;
        this.title = null;
        this.text = null;

        this.style = null;
    }
}" x-on:mouseenter="pauseProgress" x-on:mouseleave="startProgress" @showed="startProgress"
    @server_notifying.window="alertFromAlertEvent" x-show="show" x-transition:enter="alert-transition-enter"
    x-transition:enter-start="alert-transition-initial" x-transition:enter-end="alert-transition-final"
    x-transition:leave="alert-transition-leave" x-transition:leave-start="alert-transition-final"
    x-transition:leave-end="alert-transition-initial" :class="style" role="alert" {{ $attributes }}>
    <div class="flex items-start gap-4 relative">
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

    {{-- progress --}}
    <template x-if="float">
        <div class="alert-progress">
            <span id="ProgressLabel" class="sr-only">Loading</span>

            <span role="progressbar" aria-labelledby="ProgressLabel" :aria-valuenow="progress"
                class="alert-progress-inner">
                <span class="alert-progress-load" :style="'width: ' + progress + '%'"></span>
            </span>
        </div>
    </template>
</div>
