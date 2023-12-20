@props(['location', 'text', 'variant', 'small', 'large'])

@php
    $location = $location ?? 'left';
    $small = $small ?? false;
    $large = $large ?? false;

    $class = 'dropdown';
@endphp

<div x-data="{
    dropped: false
}"
    class="dropdown {{ $location == 'left' ? 'dropdown-left' : 'dropdown-right' }} dropdown-{{ $small ? 'small' : ($large ? 'large' : '') }}">

    {{-- content --}}
    <div x-show="dropped" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-14"
        x-transition:enter-end="opacity-100 -translate-y-0" x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 -translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-14" class="dropdown-group">
        {{ $content ?? null }}
    </div>

    {{-- toggler --}}
    <div class="relative z-40">
        <x-admin.button x-on:click="dropped = !dropped" text="{{ $text ?? '' }}" :small="$small" :large="$large"
            :prepend-icon="$location == 'left' ? 'three-dots-vertical' : null" :append-icon="$location == 'right' ? 'three-dots-vertical' : null" variant="{{ $variant ?? 'primary' }}" />
    </div>

</div>
