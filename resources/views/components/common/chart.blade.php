@props([
    'type' => 'bar',
    'title' => null,
    'datasetTitle' => null,
    'labels' => [],
    'values' => [],
    'colors' => [],
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
            'datasets' => [
                [
                    'label' => $datasetTitle,
                    'data' => $values,
                    'backgroundColor' => $colors,
                    'hoverOffset' => 4,
                ],
            ],
        ],
        'options' => [
            'responsive' => true,
            'plugins' => [
                'legend' => [
                    'position' => 'top',
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
    init() {
        new Chart($el, {{ json_encode($config) }});
    }
}"></canvas>
