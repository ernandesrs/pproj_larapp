@props(['float', 'type', 'closable', 'title', 'text'])

@php
    $float = $float ?? false;
    $type = $type ?? 'default';
    $closable = $closable ?? false;

    $class = 'alert alert-' . $type . ($float ? ' alert-float' : '');
@endphp

<div role="alert" class="{{ $class }}" {{ $attributes }}>
    <div class="flex items-start gap-4">
        <span class="alert-icon">
            @switch($type)
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
            @if ($title ?? null)
                <strong class="alert-title"> {{ $title }} </strong>
            @endif

            <p class="alert-text">{{ $text }}</p>
        </div>

        @if ($closable)
            <button class="text-front-dark-ligth-2 text-opacity-50 transition hover:text-opacity-70">
                <span class="sr-only">Dismiss popup</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        @endif
    </div>
</div>
