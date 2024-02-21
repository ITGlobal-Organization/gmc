const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').vue()

.postCss('resources/css/app.css', 'public/css')
.sourceMaps()
mix.copyDirectory('resources/js/custom', 'public/js/scripts');
// mix.js('resources/js/socket.js', 'public/js');
mix.options({ runtimeChunkPath: '.' });

mix.webpackConfig({
    stats: {
      children: true,
    },
  });



