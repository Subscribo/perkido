process.env.DISABLE_NOTIFIER = true;

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
    mix.less([
        'components.less',
        'theme.less'
    ], 'public/assets/css/perkido.css');
});

elixir(function(mix) {
    mix.scripts(['libs/*.js'], 'public/assets/js/vendor.js')
       .scripts(['flickity-settings.js', 'global.js', 'portfolio-shuffle.js'], 'public/assets/js/perkido.js');
});

elixir(function(mix) {
    mix.version(['public/assets/js/perkido.js', 'public/assets/js/vendor.js', 'public/assets/css/perkido.css']);
});
