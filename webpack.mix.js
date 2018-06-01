let mix = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.babel([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/offcanvas.js',    
    'resources/assets/js/jquery.lazy.min.js',
    'resources/assets/js/holder.min.js',
    'resources/assets/js/slick.min.js',
    'resources/assets/js/plyr.min.js',
    'resources/assets/js/custom.js'
], 'public/js/app.js');
mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/offcanvas.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/slick.css',
    'resources/assets/css/slick-theme.css',
    'resources/assets/css/slick-theme.css',
    'resources/assets/css/plyr.css',         
    'resources/assets/css/custom.css'
], 'public/css/app.css');
