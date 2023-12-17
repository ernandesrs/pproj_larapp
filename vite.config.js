import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/front/app.js',
                'resources/css/front/app.css',

                'resources/js/customer/app.js',
                'resources/css/customer/app.css',

                'resources/js/admin/app.js',
                'resources/css/admin/app.css'
            ],
            refresh: true,
        }),
    ],
});
