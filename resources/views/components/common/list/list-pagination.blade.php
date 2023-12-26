@props(['model', 'eachSide'])

@php
    $pagination = $model ? $model->onEachSide($eachSide ?? 3)->linkCollection() : null;

    if ($pagination) {
        $total = $pagination->count();

        $previous = $pagination[0];
        $next = $pagination[$total - 1];

        $firstActive = $pagination[1]['active'];
        $lastActive = $pagination[$total - 2]['active'];
    }
@endphp

@if ($pagination)
    <div class="pagination">
        <nav class="pagination-nav">
            @if ($previous)
                <x-common.list.list-pagination-item previous url="{{ $previous['url'] }}"
                    text="{{ $previous['label'] }}" :active="$firstActive" />
            @endif

            @foreach ($pagination as $key => $p)
                @if ($key > 0 && $key < $total - 1)
                    <x-common.list.list-pagination-item url="{{ $p['url'] }}" text="{{ $p['label'] }}"
                        :active="$p['active']" />
                @endif
            @endforeach

            @if ($next)
                <x-common.list.list-pagination-item next url="{{ $next['url'] }}"
                    text="{{ $next['label'] }}" :active="$lastActive" />
            @endif
        </nav>
    </div>
@endif
