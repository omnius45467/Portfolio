var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.less([
        '../../../styles/app.less'
    ], 'public/css/style.css');
    mix.scripts([
        '../../../js/jquery.min.js',
        '../../../js/bootstrap.min.js',
        '../../../js/flipcard.js',
        '../../../bower_components/three.js/build/three.js'
    ], 'public/js/main.js');

});
