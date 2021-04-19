const mix = require('laravel-mix');
const path = require('path');

require('laravel-mix-tailwind');


// mix.webpackConfig({
// Add custom config here if neccessary
// });

mix.copy('resources/assets/js/vendor', 'public/assets/web/dist/js/vendor');

mix.browserSync(`${path.resolve(__dirname).split(path.sep).pop()}.test`);

mix.options({
    processCssUrls: false,
});


mix
    .js('resources/assets/js/app.js', 'public/assets/web/dist/js')
    .sass('resources/assets/sass/app.scss', 'public/assets/web/dist/css')
    .tailwind();
    

if (!mix.inProduction()) {
    mix.sourceMaps(false, 'source-map')
} else {
    mix.version('public/assets/web/dist/css/app.css');
    mix.version('public/assets/web/dist/js/app.js');
}