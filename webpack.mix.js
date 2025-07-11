const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').vue()

// mix.js('resources/js/socket.js', 'public/js')
.postCss('resources/css/app.css', 'public/css')
.sourceMaps()
mix.copyDirectory('resources/js/custom', 'public/js/scripts');

mix.options({ runtimeChunkPath: '.' });
