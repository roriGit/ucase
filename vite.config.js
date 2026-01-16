import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/css/normalize.css',
                'resources/css/case.css',
                'resources/css/u-case.webflow.css',
                'resources/js/webflow.js',
                'resources/js/app.js',
                'resources/js/app-admin.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
