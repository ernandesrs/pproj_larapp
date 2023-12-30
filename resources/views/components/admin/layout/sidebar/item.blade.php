@props([
    'nav' => [],
])

<div class="mb-8">
    <h5 class="text-xs uppercase px-8 mb-3">
        {{ $nav['title'] }}
    </h5>

    @foreach ($nav as $link)
        @if ($link['items'] ?? null)
            {{-- subnav --}}
        @else
            {{-- links --}}
        @endif
    @endforeach
</div>
