@props([
    'id' => null,
    'type' => 'bar',
    'title' => null,
    'subtitle' => null,
    'labels' => [],
    'datasets' => [],
    'liveUpdate' => null,
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

    if (!empty($liveUpdate)) {
        if (!is_numeric($liveUpdate)) {
            throw new \Exception('The liveUpdate prop must be of type number');
        }

        $attributes = $attributes->merge(['wire:poll.' . $liveUpdate . 's' => 'updateChartData']);
    }

@endphp

<canvas
    @chart_data_updated.window="chartUpdatedHandler"
    x-data="{
        id: '{{ $id }}',
        config: {{ json_encode($config) }},
    
        init() {
            if (!window[this.id]) {
                window[this.id] = new Chart($el, this.config);
            } else {
                window[this.id].destroy();
                window[this.id] = new Chart($el, this.config);
            }
        },
        chartUpdatedHandler(e) {
            if (e.detail[0]?.id != this.id) {
                return;
            }
    
            for (let i = 0; i < e.detail[0]?.datasets.length; i++) {
                window[this.id].config.data.datasets[i].data = e.detail[0]?.datasets[i].data;
            }
    
            window[this.id].render();
            window[this.id].update('active');
        }
    }" {{ $attributes }}></canvas>
