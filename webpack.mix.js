const mix = require('laravel-mix');
const path = require('path');

// mix.webpackConfig({
// Add custom config here if neccessary
// });

mix.copy('src/assets/js/vendor', 'public/assets/web/dist/js/vendor');

mix.browserSync(`${path.resolve(__dirname).split(path.sep).pop()}.test`);

mix.options({
    processCssUrls: false,
});

mix.sass('src/assets/scss/app.scss', 'public/assets/web/dist/css');
mix.js('src/assets/js/app.js', 'public/assets/web/dist/js');

if (!mix.inProduction()) {
    mix.sourceMaps(false, 'source-map')
} else {
    mix.version('public/assets/web/dist/css/app.css');
    mix.version('public/assets/web/dist/js/app.js');
}