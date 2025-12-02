import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

const hmrHost = process.env.VITE_HMR_HOST ?? 'localhost';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/tailwind.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/master.js',
            ],
            refresh: true,
        }),
        tailwindcss()
    ],
    // Ensure the dev server writes an accessible URL to the hot file (avoid 0.0.0.0)
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: hmrHost,
            port: 5173,
        },
    },
});
