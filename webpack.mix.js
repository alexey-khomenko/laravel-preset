const mix = require('laravel-mix');

mix
    .setPublicPath('public/build')
    .setResourceRoot('/build/')
    .copyDirectory('resources/images', 'public/build/images')
    .copyDirectory('resources/favicons', 'public/build/favicons')
    .js('resources/js/app.js', 'js')
    .extract(['lazysizes'])
    .sass('resources/css/app.scss', 'css')
    .options({
        postCss: [
            require('tailwindcss')('tailwind.config.js'),
        ]
    })
;

if (mix.inProduction()) {
    // todo сжать картинки

    const fs = require('fs');
    const configs = [
        'resources/configs/favicons.json',
        'resources/configs/images.json',
    ];

    configs.forEach(function (value) {
        JSON.parse(fs.readFileSync(value).toString()).forEach(function (value) {
            mix.version(value);
        });
    });
} else {
    mix.browserSync({
        proxy: process.env.APP_URL,
        files: [
            'Modules/*/Resources/**/*.*',
            'resources/**/*.*',
        ],
    });
}