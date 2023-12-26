@props(['url', 'text', 'previous', 'next', 'active'])

@php
    $url = empty($url) ? null : $url;
    $previous = $previous ?? false;
    $next = $next ?? false;
    $active = $active ?? false;
@endphp

<a wire:navigate href="{{ $url ?? '' }}"
    class="pagination-link {{ !$url ? 'pagination-link-alt pagination-link-active' : '' }} {{ $active ? 'pagination-link-active' : '' }}"
    {{ $attributes }}>

    @if ($previous || $next)
        <span class="sr-only">{{ $previous ? 'Prev' : 'Next' }} Page</span>
        <i class="bi bi-{{ $previous ? 'chevron-double-left' : 'chevron-double-right' }}"></i>
    @elseif(empty($url))
        <span>...</span>
    @else
        {{ $text }}
    @endif
</a>
