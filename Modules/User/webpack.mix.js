const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public/build').mergeManifest();

mix
    .js(__dirname + '/Resources/assets/js/app.js', 'js/user.js')
    .sass( __dirname + '/Resources/assets/css/app.scss', 'css/user.css')
;

if (mix.inProduction()) {
    mix.version();
}
