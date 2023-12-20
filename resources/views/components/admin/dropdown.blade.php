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
    <div x-show="dropped" class="dropdown-group">
        {{ $content ?? null }}
    </div>

    {{-- toggler --}}
    <x-admin.button x-on:click="dropped = !dropped" text="{{ $text ?? '' }}" :small="$small" :large="$large"
        :prepend-icon="$location == 'left' ? 'three-dots-vertical' : null" :append-icon="$location == 'right' ? 'three-dots-vertical' : null" variant="{{ $variant ?? 'primary' }}" />

</div>
