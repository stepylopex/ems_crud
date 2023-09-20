const mix = require('laravel-mix');

mix
   .setPublicPath('public')
   .js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
   .js('resources/js/sb-admin-2.min.js', 'public/js');
