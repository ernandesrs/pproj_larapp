@props(['image', 'alternativeText', 'type', 'size'])

@php
    $image = $image ?? null;
    $alternativeText = $alternativeText ?? 'Thumbnail';
    $type = $type ?? 'avatar';
    $size = $size ?? 'default';
@endphp

<div class="thumbnail thumbnail-{{ $size }} thumbnail-{{ $type }}">
    @if ($image)
        <img class="image" src="{{ $image }}" alt="{{ $alternativeText }}">
    @else
        <span class="alternative">{{ strtoupper($alternativeText[0]) }}</span>
    @endif
</div>
