const mix = require('laravel-mix');
let LiveReloadPlugin = require('webpack-livereload-plugin');
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

mix.webpackConfig({
  plugins: [
      new LiveReloadPlugin()
  ]
});

mix.browserSync('locallocalaway.com');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/main/frontend.scss', 'public/main');
