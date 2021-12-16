const mix = require('laravel-mix');
var path = require('path');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel applications. By default, we are compiling the CSS
| file for the application as well as bundling up all the JS files.
|
*/

mix
.autoload({
    'jquery': [
        '$', 'window.$', 'jQuery', 'window.jQuery'
    ]
})

.sass('resources/sass/app.scss', 'css')

.js('resources/js/app.js', 'js')

.vue({
    version: 2,
    extractStyles: true,
    globalStyles: 'resources/sass/_settings.scss'
})

.alias({
    '@sass': path.resolve(__dirname, 'resources/sass/'),
    '@js': path.resolve(__dirname, 'resources/js/')
})

.options({
    processCssUrls: false,
})

.purifyCss(true)

.extract(['lodash', 'jquery', 'vue'])
.sourceMaps()

.browserSync({
    proxy: 'lvh.me:8000'
});

if (mix.inProduction()) {
    mix.version();
}
