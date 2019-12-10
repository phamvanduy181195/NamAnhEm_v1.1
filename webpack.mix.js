const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css');

mix.sass('resources/sass/shop.scss', 'public/css/shop.css')
    .js('resources/assets/js/shop.js', 'public/js/shop.js');

mix.js('resources/assets/js/markdown.js', 'public/js/markdown.js')
    .sass('resources/sass/markdown.scss', 'public/css/markdown.css');

mix.js('resources/assets/js/category.js', 'public/js/category.js');

mix.copyDirectory('resources/assets/template', 'public/assets/template');
