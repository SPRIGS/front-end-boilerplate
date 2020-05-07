const mix = require('laravel-mix');

mix.setPublicPath(path.resolve('./'));

var HardSourceWebpackPlugin = require('hard-source-webpack-plugin');
mix.webpackConfig({
    plugins: [new HardSourceWebpackPlugin()],
});

mix.copy('resources/assets/js/vendor', 'public/assets/web/dist/js/vendor');

//  mix.browserSync('domain.test');

mix.options({
    processCssUrls: false,
});

mix.sass('resources/assets/sass/app.scss', 'public/assets/web/dist/css');
// mix.sourceMaps(false, 'source-map').

mix.styles(
    ['public/assets/web/dist/css/app.css'],
    'public/assets/web/dist/css/app.css',
    './'
);

mix.version('public/assets/web/dist/css/app.css');

mix.js('resources/assets/js/app.js', 'public/assets/web/dist/js');

mix.version('public/assets/web/dist/js/app.js');
