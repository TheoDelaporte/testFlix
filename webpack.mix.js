const mix = require('laravel-mix');

mix.setPublicPath('./webroot')
    .js('assets/js/app.js', 'webroot/js').vue()
    .sass('assets/sass/app.scss', 'webroot/css')
    .sass('assets/sass/loading.scss', 'webroot/css')
    .sass('assets/sass/slider.scss', 'webroot/css')
    .sass('assets/sass/play_button.scss', 'webroot/css')
    .js('assets/js/play_button.js', 'webroot/js')
    .js('assets/js/loading.js', 'webroot/js')
    .js('assets/js/slider.js', 'webroot/js')
    .version();
