import '../bootstrap';

import ApexCharts from 'apexcharts';

let homeUsersChart = document.querySelector("#home_users_chart");
let homeRadialOne = document.querySelector('#home_radial_one');
let homeRadialTwo = document.querySelector('#home_radial_two');
let homeRadialThree = document.querySelector('#home_radial_three');
let homeRadialFour = document.querySelector('#home_radial_four');

if (homeUsersChart) {
    const data = JSON.parse(homeUsersChart.getAttribute('data-chart'));

    (new ApexCharts(homeUsersChart, {
        responsive: [
            {
                breakpoint: 640,
                options: {
                    chart: {
                        background: 'transparent',
                    }
                },
            },
            {
                breakpoint: 768,
                options: {
                    chart: {
                        background: 'transparent',
                    }
                },
            },
            {
                breakpoint: 1024,
                options: {
                    chart: {
                        background: 'transparent',
                    }
                },
            },
            {
                breakpoint: 1280,
                options: {
                    chart: {
                        background: 'transparent',
                    }
                },
            }
        ],
        chart: {
            type: 'pie',
            width: '100%',
            redrawOnParentResize: true,
            redrawOnWindowResize: true,
            offsetX: 0,
            offsetY: 0,
            toolbar: {
                // show/hidden download(png,svg,csv) toolbar
                show: false,
            }
        },
        colors: [
            // apply colors in all(label/chart/tooltip)
            '#03A9F4',
            '#00E676',
            '#FF3D00'
        ],
        labels: [
            data.total.label,
            data.admins.label,
            data.unverifieds.label
        ],
        series: [
            data.total.value,
            data.admins.value,
            data.unverifieds.value
        ],
        legend: {
            show: true,
            position: 'bottom',
            horizontalAlign: 'center',
            floating: false,
            itemMargin: {
                horizontal: 6,
                vertical: 4
            },
        },
        tooltip: {
            enabled: true,
            followCursor: true,
        },
    })).render();
}

if (homeRadialOne) {
    (new ApexCharts(homeRadialOne, {
        chart: {
            type: 'radialBar',
            width: '100%',
            height: 250
        },
        colors: [
            // apply colors in all(label/chart/tooltip)
            '#03A9F4',
            '#FF3D00',
        ],
        labels: [
            'Example #1',
            'Example #2',
        ],
        series: [
            78,
            20,
        ],
        legend: {
            show: true,
            position: 'top',
            horizontalAlign: 'center',
            floating: false,
            itemMargin: {
                horizontal: 6,
                vertical: 4
            },
        },
    })).render();
}

if (homeRadialTwo) {
    (new ApexCharts(homeRadialTwo, {
        chart: {
            type: 'radialBar',
            width: '100%',
            height: 250
        },
        colors: [
            // apply colors in all(label/chart/tooltip)
            '#03A9F4',
            '#00E676'
        ],
        labels: [
            'Example #1',
            'Example #2',
        ],
        series: [
            12,
            68
        ],
        legend: {
            show: true,
            position: 'top',
            horizontalAlign: 'center',
            floating: false,
            itemMargin: {
                horizontal: 6,
                vertical: 4
            },
        },
    })).render();
}

if (homeRadialThree) {
    (new ApexCharts(homeRadialThree, {
        chart: {
            type: 'radialBar',
            width: '100%',
            height: 250
        },
        colors: [
            // apply colors in all(label/chart/tooltip)
            '#00E676',
            '#03A9F4',
        ],
        labels: [
            'Example #1',
            'Example #2',
        ],
        series: [
            68,
            50,
        ],
        legend: {
            show: true,
            position: 'top',
            horizontalAlign: 'center',
            floating: false,
            itemMargin: {
                horizontal: 6,
                vertical: 4
            },
        },
    })).render();
}

if (homeRadialFour) {
    (new ApexCharts(homeRadialFour, {
        chart: {
            type: 'radialBar',
            width: '100%',
            height: 250
        },
        colors: [
            // apply colors in all(label/chart/tooltip)
            '#03A9F4',
            '#00E676',
        ],
        labels: [
            'Example #1',
            'Example #2',
        ],
        series: [
            33,
            79
        ],
        legend: {
            show: true,
            position: 'top',
            horizontalAlign: 'center',
            floating: false,
            itemMargin: {
                horizontal: 6,
                vertical: 4
            },
        },
    })).render();
}