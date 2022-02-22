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
    .js('resources/js/app.js', 'public/js')
    .scripts('node_modules/Jquery/dist/Jquery.js','public/site/jquery.js')
    .scripts('node_modules/jquery-ui/ui/widgets/datepicker.js','public/site/datepicker.js')
    .scripts('node_modules/jquery-ui/themes/base/datepicker.css','public/site/datepicker.css');

