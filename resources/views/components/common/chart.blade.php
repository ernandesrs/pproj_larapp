@props([
    'type' => 'bar',
    'title' => null,
    'subtitle' => null,
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
                'subtitle' => [
                    'display' => empty($subtitle) ? false : true,
                    'text' => $subtitle,
                    'color' => '#B2B2B2',
                    'font' => [
                        'size' => 12,
                        'family' => 'tahoma',
                        'weight' => 'normal',
                        'style' => 'italic',
                    ],
                    'padding' => [
                        'bottom' => 10,
                    ],
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
