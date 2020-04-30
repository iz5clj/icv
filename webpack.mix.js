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

/*
 / This is the part for admin
 /
 */
mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/popper.js/dist/umd/popper.js',
    'node_modules/bootstrap/dist/js/bootstrap.js'
], 'public/assets/js/core.js').version();

mix.scripts([
    'resources/js/plugins/bootstrap-datepicker.js',
    'resources/js/plugins/bootstrap-notify.js',
    'resources/js/plugins/bootstrap-switch.js',
    'resources/js/plugins/chartist.js',
    'resources/js/plugins/nouislider.js',
    'resources/js/light-bootstrap-dashboard.js',
    'node_modules/select2/dist/js/select2.js'
], 'public/assets/js/plugins.js').version();

mix.scripts('resources/js/app.js', 'public/assets/js/app.js').version();

mix.sass('resources/sass/app.scss', 'public/assets/css').version();
mix.sass('resources/sass/custom.scss', 'public/assets/css').version();

/*
 / This is the part for the front
 /
 */
mix.sass('resources/sass/f/style.scss', 'public/assets/css/f').version();
mix.styles('node_modules/glightbox/dist/css/glightbox.css', 'public/assets/css/f/glightbox.css').version();
mix.sass('resources/sass/f/custom.scss', 'public/assets/css/f').version();
mix.scripts('node_modules/glightbox/dist/js/glightbox.js', 'public/assets/js/f/glightbox.js').version();
mix.scripts('resources/js/f/script.js', 'public/assets/js/f/script.js').version();

mix.browserSync({
    proxy: 'icv.test',
    open: false,
    notify: {
        styles: {
            top: 'auto',
            bottom: '0'
        }
    }
});
