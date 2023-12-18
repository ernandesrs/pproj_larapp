const sidebar = {
    sidebarEl: null,
    sidebarTogglerEl: null,

    start() {
        this.sidebarEl = document.querySelector('#jsSidebar');
        this.sidebarTogglerEl = document.querySelector('#jsSidebarToggler');

        if (this.sidebarEl && this.sidebarTogglerEl) {
            this.startMonitor();
        }
    },

    startMonitor() {
        this.sidebarTogglerEl.addEventListener('click', (event) => {
            this.sidebarEl.classList.toggle('layout-left-side-show');
        });
    }
};

sidebar.start();