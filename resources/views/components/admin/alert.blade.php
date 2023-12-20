@props(['float', 'type', 'closable', 'title', 'text'])

@php
    $alert = [
        'show' => false,
        'has' => $text ?? null ? true : false,
        'float' => $float ?? false,
        'type' => $type ?? 'default',
        'title' => $title ?? null,
        'text' => $text ?? null,
        'closable' => $closable ?? false,
    ];

    $class = 'alert alert-' . $alert['type'] . ($alert['float'] ? ' alert-float' : '');
@endphp

<div x-data="{
    ...{{ json_encode($alert) }},
    init() {
        $nextTick(() => {
            this.show = this.has;
        });
    }
}" x-show="show" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-full" role="alert" class="{{ $class }}" {{ $attributes }}>
    <div class="flex items-start gap-4">
        <span class="alert-icon">
            @switch($alert['type'])
                @case('success')
                    <i class="bi bi-check-circle"></i>
                @break

                @case('error')
                    <i class="bi bi-x-circle"></i>
                @break

                @case('danger')
                    <i class="bi bi-exclamation-circle"></i>
                @break

                @case('info')
                    <i class="bi bi-exclamation-circle"></i>
                @break

                @default
                    <i class="bi bi-exclamation-circle"></i>
            @endswitch
        </span>

        <div class="flex-1">
            @if ($alert['title'] ?? null)
                <strong class="alert-title"> {{ $alert['title'] }} </strong>
            @endif

            <p class="alert-text">{{ $alert['text'] }}</p>
        </div>

        @if ($alert['closable'])
            <button x-on:click="show = !show"
                class="text-front-dark-ligth-2 text-opacity-50 transition hover:text-opacity-70">
                <span class="sr-only">Dismiss popup</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        @endif
    </div>
</div>
