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

mix.js('resources/js/pages/index.js', 'public/js')
    .sass('resources/sass/pages/index.scss', 'public/css')
    .sass('resources/sass/pages/project.scss', 'public/css')
    .sass('resources/sass/pages/pdf/pdf-resume.scss', 'public/css');
