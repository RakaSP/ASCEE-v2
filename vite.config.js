import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/images/*',
                    dest: 'assets/images',
                },
            ],
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                entryFileNames: 'assets/[name].js', 
                chunkFileNames: 'assets/[name].js',
                assetFileNames: 'assets/[name].[ext]' 
            }
        }
    }
});
