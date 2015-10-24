var elixir = require('laravel-elixir');

elixir(function(mix) {
 mix.less(['../../../styles/app.less'], 'style.css');
 mix.scripts([
  '../../../bower_components/jquery/dist/jquery.js',
  '../../../bower_components/foundation/js/foundation.js'
 ], 'js/main.js');
  
});
