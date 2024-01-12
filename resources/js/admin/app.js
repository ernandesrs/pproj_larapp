import '../bootstrap';

import Chart from 'chart.js/auto'

window.Chart = Chart;

window.adminTheme = {
    start() {
        let currentTheme = this.getTheme();

        this.setTheme(currentTheme ?? 'light');
    },
    isDarkTheme() {
        return this.getTheme() == 'dark';
    },
    getTheme() {
        return localStorage.getItem('admin_theme');
    },
    setTheme(themeName) {
        localStorage.setItem('admin_theme', themeName);
        document.querySelector('html').setAttribute('theme', themeName);
    },
    toggleTheme() {
        this.setTheme((this.getTheme() ?? 'light') == 'light' ? 'dark' : 'light');

        dispatchEvent((new Event('theme_has_change')));
    }

};

window.adminTheme.start();