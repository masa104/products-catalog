const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    // .js('resources/js/app.js', 'public/js')
    .js('resources/js/gotop.js', 'public/js')
    // .js('resources/js/swiper.js', 'public/js')
    .js('resources/js/hero_anime.js', 'public/js')
    .js('resources/js/card_anime.js', 'public/js')
    .js('resources/js/detail_anime.js', 'public/js')
    .sass('resources/sass/pages/home.scss', 'public/css/pages/home.min.css')
    .sass('resources/sass/pages/list.scss', 'public/css/pages/list.min.css')
    .sass('resources/sass/pages/items.scss', 'public/css/pages/items.min.css')
    .sass('resources/sass/pages/detail.scss', 'public/css/pages/detail.min.css')
    .sass('resources/sass/style.scss', 'public/css/style.min.css')
    .sourceMaps(true, 'source-map');

if (mix.inProduction()) {
    mix.version();
}
mix.browserSync({ // ここから
    proxy: {
        target: "http://127.0.0.1:8000" // 最後に/は不要
    },
    files: [ // チェックするファイルは下記で十分ではないかな。
        './resources/**/*',
        './app/**/*',
        './config/**/*',
        './routes/**/*',
        './public/**/*'
    ],
    open: false, //BrowserSync起動時にブラウザを開かない
    reloadOnRestart: true //BrowserSync起動時にブラウザにリロード命令おくる
});
