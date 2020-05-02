const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/fonts', 'public/fonts')
    .copy('resources/img', 'public/img')
    .copy('resources/icons', 'public/icons')
    .copy('resources/favicon', 'public/favicon')
