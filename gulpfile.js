var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        '../../../node_modules/sweetalert/dist/sweetalert.css'
    ]);
    mix.scripts([
        '../../../node_modules/vue/dist/vue.js',
        '../../../node_modules/vue-resource/dist/vue-resource.js',
        '../../../node_modules/vue-router/dist/vue-router.js',
        '../../../node_modules/sweetalert/dist/sweetalert-dev.js',
        'main.js',
        'flash.js',
        'showError.js',
    ]);
});
