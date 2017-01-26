const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');



/*
 |--------------------------------------------------------------------------
 */



elixir((mix) => {
    mix.sass('app.scss')
      .sass('admin.scss')
//-------------------------------------------------------------------------------------
      .styles([
        './bower_components/sweetalert2/dist/sweetalert2.css',
      ],'public/css/all.css')
//-------------------------------------------------------------------------------------
      .webpack('app.js')
//-------------------------------------------------------------------------------------
      .scripts('./resources/assets/js/script.js')
      // .scripts('./resources/assets/js/semantic.js')
      .scripts([
          //  './resources/assets/plugins/pacejs/pace.js',
          //  './node_modules/pace-progress/pace.js',
          //  './resources/assets/js/plugins/modernizr-custom.js',
          //  './node_modules/scrollreveal/src/scrollreveal.js',
          //  './node_modules/sidr/dist/jquery.sidr.js',   //add ; in the first line to avoid TypeError: (intermediate value)
           './bower_components/sweetalert2/dist/sweetalert2.js',
          //  './node_modules/page-accelerator/src/page-accelerator.js',
          //  './node_modules/velocity-animate/velocity.js',
          //  './node_modules/velocity-animate/velocity.ui.js'
          //  './bower_components/Swiper/dist/js/swiper.jquery.js',
          //  './bower_components/Swiper/dist/js/swiper.js'
           ]
           , 'public/js/all.js')
//-------------------------------------------------------------------------------------
      .copy('./resources/assets/fonts', 'public/fonts')
      .copy('./resources/assets/images', 'public/images')
//-------------------------------------------------------------------------------------
      .browserSync({
           proxy: 'dashboard.dev'
       })
       ;
});
