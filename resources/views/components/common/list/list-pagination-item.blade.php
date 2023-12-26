@props(['url', 'text', 'previous', 'next', 'active'])

@php
    $previous = $previous ?? false;
    $next = $next ?? false;
    $active = $active ?? false;
@endphp

<a wire:navigate href="{{ $url }}"
    class="pagination-link {{ $previous ? 'pagination-link-previous' : ($next ? 'pagination-link-next' : '') }} {{ $active ? 'pagination-link-active' : '' }}"
    {{ $attributes }}>

    @if ($previous || $next)
        <span class="sr-only">{{ $previous ? 'Prev' : 'Next' }} Page</span>
        <i class="bi bi-{{ $previous ? 'chevron-double-left' : 'chevron-double-right' }}"></i>
    @else
        {{ $text }}
    @endif
</a>
