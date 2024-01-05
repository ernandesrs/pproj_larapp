<canvas x-data="{
    title: '{{ $this->title }}',
    dataSetLabel: '{{ $this->dataSetLabel }}',
    dbData: {{ json_encode($this->data) }},

    init() {
        const labels = [];
        const data = [];
        const backgroundColors = [];

        this.dbData.map((i) => {
            labels.push(i.label);
            data.push(i.value);
            backgroundColors.push(i.color);
        });

        const myChart = new Chart($el, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: this.dataSetLabel,
                    data: data,
                    backgroundColor: backgroundColors,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: (this.title ?? '').length > 0 ? true : false,
                        text: this.title
                    }
                }
            },
        });
    }
}"></canvas>
