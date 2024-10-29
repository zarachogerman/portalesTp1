import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/home.css', 'resources/css/slider.css','resources/js/app.js', 'resources/js/menu.js', 'resources/js/slider.js', 'resources/css/home_cards.css', 'resources/css/reviews.css', 'resources/js/reviews.js'],
            refresh: true,
        }),
    ],
});
