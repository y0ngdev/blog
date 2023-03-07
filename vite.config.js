import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/slick.css',
                'resources/css/all.min.css',
                'resources/css/simple-line-icons.css',
                'resources/js/app.js',
                'resources/js/jquery.min.js',
                'resources/js/popper.min.js',
                'resources/js/slick.min.js',
                'resources/js/jquery.sticky-sidebar.min.js',
                'resources/js/bootstrap.min.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});

