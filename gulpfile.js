var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.js'
    ], 'public/js/js.js');

    mix.scripts([
        '../../../node_modules/bootstrap/dist/css/bootstrap.css',
        '../../../node_modules/font-awesome/css/font-awesome.css'
    ], 'public/css/css.css');

    mix.copy(
        'node_modules/font-awesome/fonts', 'public/fonts'
    );
    //mix.sass('app.scss');
});
