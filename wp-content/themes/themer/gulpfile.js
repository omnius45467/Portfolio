var elixir = require('laravel-elixir');

elixir(function(mix) {
 mix.less([
  '../../../css/style-minimal.css'
 ], 'public/css/style.css');
 mix.scripts([
  //'../../../bower_components/jquery/dist/jquery.js',
  //'../../../bower_components/foundation/js/foundation.js'
     '../../../js/jquery.min.js',
  '../../../js/jquery.easings.min.js',
  '../../../js/bootstrap.min.js',
  '../../../js/velocity.min.js',
  '../../../js/vegas.js',
  '../../../js/jquery.mousewheel.js',
  '../../../js/jquery.mCustomScrollbar.js',
  '../../../js/classie.js',
  '../../../js/dialogFx.js',
  '../../../js/main.js',
 ], 'public/js/main.js');
  
});
