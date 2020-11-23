const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .setPublicPath('public/build')
    .setResourceRoot('/build/')
    .copyDirectory('resources/img', 'public/build')

//    .version(['public/build/images/logo.png', 'public/build/favicon.ico'])

    .js('resources/js/app.js', 'js')
    .sass('resources/css/app.scss', 'css')
    .options({
        postCss: [
            require('tailwindcss')('tailwind.config.js'),
        ],
        processCssUrls: false
    })
;

if (mix.inProduction()) mix.version();