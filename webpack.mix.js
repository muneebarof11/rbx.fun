const mix = require('laravel-mix');
var path = require('path');
require('mix-env-file');
require('dotenv').config();

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': path.resolve(__dirname, 'resources'),
            'assets': path.resolve(__dirname, 'public', 'storage', 'assets')
        },
    }
});

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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    // .sass('resources/sass/app.scss', 'public/css');
