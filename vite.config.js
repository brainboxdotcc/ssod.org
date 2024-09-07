import { sentryVitePlugin } from "@sentry/vite-plugin";
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [laravel({
        input: [
            'resources/scss/app.scss',
            'resources/scss/premium.scss',
            'resources/css/app.css',
            'resources/css/wordpress.css',
            'resources/js/bootstrap.js',
            'resources/js/app.js',
            'resources/js/premium.js',
            'resources/js/premium-verify.js',
        ],
        refresh: true,
    }), viteStaticCopy({
        targets: [
            {
                src: 'resources/img',
                dest: '..',
            },
            {
                src: 'node_modules/@fortawesome/fontawesome-free/webfonts',
                dest: '..',
            }
        ]
    }), sentryVitePlugin({
        org: "brainboxcc",
        project: "ssod-js",
        release: "ssod-js@1.0.0",
        url: "https://sentry.brainbox.cc"
    })],
    server: {
        port: 9999
    },
    build: {
        cssMinify: 'esbuild',
        minify: 'esbuild',
        chunkSizeWarningLimit: 2048,
        sourcemap: true
    }
});
