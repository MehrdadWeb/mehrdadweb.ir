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

/* CSS front */
mix.styles([
        'resources/views/front/lib/bootstrap/css/bootstrap.min.css',
        'resources/views/front/lib/animate/animate.min.css',
        'resources/views/front/lib/owlcarousel/assets/owl.carousel.min.css',
        'resources/views/front/lib/lightbox/css/lightbox.min.css',
        'resources/views/front/css/style.css',
        'public/back/assets/css/chosen.css',
        'public/back/assets/css/chosen.min.css',

    ],
    'public/front/css/app.css');
/* CSS back */
mix.styles([
        'public/back/assets/css/chosen.css',
        'public/back/assets/css/chosen.min.css',

    ],
    'public/back/assets/css/app.css');
/* js front */
mix.scripts([
    'resources/views/front/lib/jquery/jquery.min.js',
    'resources/views/front/lib/jquery/jquery-migrate.min.js',
    'resources/views/front/bootstrap/js/bootstrap.bundle.min.js',

    'resources/views/front/mobile-nav/mobile-nav.js',
    'resources/views/front/lib/wow/wow.min.js',
    'resources/views/front/lib/waypoints/waypoints.min.js',
    'resources/views/front/lib/counterup/counterup.min.js',
    'resources/views/front/lib/owlcarousel/owl.carousel.min.js',
    'resources/views/front/lib/isotope/isotope.pkgd.min.js',
    'resources/views/front/lib/lightbox/js/lightbox.min.js',
    'resources/views/front/contactform/contactform.js',
    'resources/views/front/js/main.js',


], 'public/front/js/app.js');
/* js back */
mix.scripts([
        'public/back/assets/js/chosen.jquery.js',
        'public/back/assets/js/chosen.jquery.min.js',
        'public/back/assets/js/chosen.proto.js',
        'public/back/assets/js/chosen.proto.min.js',

    ],
    'public/back/assets/js/app.js');