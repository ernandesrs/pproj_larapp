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
            'hover' => [
                'mode' => 'nearest',
            ],
            'elements' => [
                'arc' => [
                    'borderWidth' => 1,
                ],
            ],
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                    'labels' => [
                        'color' => \App\Livewire\Admin\Builders\Charts\Colors::labels(),
                    ],
                ],
                'title' => [
                    'display' => empty($title) ? false : true,
                    'text' => $title,
                    'color' => \App\Livewire\Admin\Builders\Charts\Colors::title(),
                    'font' => [
                        'weight' => '600',
                        'size' => '13px',
                    ],
                ],
                'subtitle' => [
                    'display' => empty($subtitle) ? false : true,
                    'text' => $subtitle,
                    'color' => \App\Livewire\Admin\Builders\Charts\Colors::subtitle(),
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

    $colors = \App\Livewire\Admin\Builders\Charts\Colors::$colors;

    if (!empty($liveUpdate)) {
        if (!is_numeric($liveUpdate)) {
            throw new \Exception('The liveUpdate prop must be of type number');
        }

        $attributes = $attributes->merge(['wire:poll.' . $liveUpdate . 's' => 'updateChartData']);
    }

@endphp

<canvas
    @chart_data_updated.window="chartUpdatedHandler"
    @theme_has_change.window="themeChangeHandler"
    x-data="{
        id: '{{ $id }}',
        config: {{ json_encode($config) }},
        colors: {{ json_encode($colors) }},
    
        init() {
            const config = JSON.parse(JSON.stringify(this.config));
    
            if (!window[this.id]) {
                window[this.id] = new Chart($el, config);
            } else {
                window[this.id].destroy();
                window[this.id] = new Chart($el, config);
            }
    
            this.defineColors();
        },
        defineColors() {
            let theme = window.adminTheme.getTheme();
    
            {{-- define dataset colors --}}
            this.config.data.datasets.forEach((datasetValue, datasetIndex) => {
                {{-- define bg color --}}
                datasetValue.backgroundColor.forEach((bgValue, bgIndex) => {
                    window[this.id].config.data.datasets[datasetIndex].backgroundColor[bgIndex] = this.colors[bgValue][theme];
                });
    
                {{-- define border color --}}
                datasetValue.borderColor.forEach((borderValue, borderIndex) => {
                    window[this.id].config.data.datasets[datasetIndex].borderColor[borderIndex] = this.colors[borderValue][theme];
                });
            });
    
            {{-- define title, subtitle and labels colors --}}
            window[this.id].config.options.plugins.title.color = this.colors['title'][theme];
            window[this.id].config.options.plugins.subtitle.color = this.colors['title'][theme];
            window[this.id].config.options.plugins.legend.labels.color = this.colors['labels'][theme];
    
            {{-- render/update --}}
            this.updateAndRender();
        },
        chartUpdatedHandler(e) {
            if (e.detail[0]?.id != this.id) {
                return;
            }
    
            for (let i = 0; i < e.detail[0]?.datasets.length; i++) {
                window[this.id].config.data.datasets[i].data = e.detail[0]?.datasets[i].data;
            }
    
            this.updateAndRender(true);
        },
        updateAndRender(updating = false) {
            window[this.id].update(updating ? 'none' : 'show');
            window[this.id].render();
        },
        themeChangeHandler(e) {
            this.defineColors();
        }
    }" {{ $attributes }}></canvas>
