@props([
    'size' => 'normal',
])

@php
    $sizes = [
        'small' => 'sm:w-[300px]',
        'normal' => 'sm:w-[400px]',
        'large' => 'sm:w-[500px]',
    ];
@endphp

<div
    x-data="{
        show: false
    }"
    class="relative">
    <div
        x-on:click="show=!show"
        class="relative z-50">
        {{ $activator }}
    </div>

    <div
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -skew-x-3 -translate-y-12 blur-sm z-40"
        x-transition:enter-end="opacity-100 skew-x-0 -translate-y-0 z-50"

        x-transition:leave="transition ease-out duration-100"
        x-transition:leave-start="opacity-100 skew-x-0 -translate-y-0 z-50"
        x-transition:leave-end="opacity-0 -skew-x-3 -translate-y-12 blur-sm z-40"

        {{ $attributes->merge([
            'class' => implode(' ', ['absolute right-0 top-16 z-50 shadow-lg rounded-3xl overflow-hidden']),
        ]) }}
        style="display:none;">
        <div class="relative w-auto {{ $sizes[$size] }} bg-white p-6">
            {{ $content }}
        </div>
    </div>
</div>
