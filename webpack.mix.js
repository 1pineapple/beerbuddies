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

mix.js('resources/assets/js/app.js', 'public/js')
   .copy('resources/assets/js/home.js', 'public/js')
   .sass('resources/assets/sass/app.sass', 'public/css')
   .sass('resources/assets/sass/login.sass', 'public/css')
   .sass('resources/assets/sass/home.sass', 'public/css')
   .sass('resources/assets/sass/edit-profile.sass', 'public/css')
   .sass('resources/assets/sass/libs/FontAwesome/font-awesome.scss', 'public/css')
   .copyDirectory('resources/assets/img', 'public/img')
   .copyDirectory('resources/assets/fonts', 'public/fonts');