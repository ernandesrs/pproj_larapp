@props([
    'type' => 'bar',
    'title' => null,
    'labels' => [],
    'datasets' => [],
])


@php
    /**
     *
     * Works in doughnut/pie
     *
     **/
    $config = [
        'type' => $type,
        'data' => [
            'labels' => $labels,
            'datasets' => $datasets,
        ],
        'options' => [
            'responsive' => true,
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
                'title' => [
                    'display' => empty($title) ? false : true,
                    'text' => $title,
                ],
            ],
        ],
    ];
@endphp

<canvas x-data="{
    config: {{ json_encode($config) }},

    init() {
        new Chart($el, this.config);
    }
}"></canvas>
