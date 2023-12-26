@props(['columns'])

@php
    $columns = $columns ?? [];
@endphp

<div class="table-wrapper">
    <div class="table-wrapper-inner">
        <table>
            <thead>
                <tr>
                    @foreach ($columns as $column)
                        <th class="highlight">{{ $column['text'] }}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                {{ $content }}
            </tbody>
        </table>
    </div>

    {{-- pagination --}}
    {{ $pagination }}
</div>
