const mix = require('laravel-mix');
            require('@tinypixelco/laravel-mix-wp-blocks');
            require('laravel-mix-purgecss');
            require('laravel-mix-copy-watched');

const tailwindcss = require('tailwindcss');
const whitelister = require('purgecss-whitelister');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix.setPublicPath('./dist')
   .browserSync({
      proxy: 'cgcn.test',
      ghostMode: {
         scroll: false,
      }
   });

mix.sass('resources/assets/styles/app.scss', 'styles')
   .sass('resources/assets/styles/editor.scss', 'styles')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('tailwind.config.js')]
   })
   .purgeCss({
      whitelist: [
         require('purgecss-with-wordpress').whitelist,
         'w-8',
         'h-8',
         'mr-2',
      ],
      whitelistPatterns: require('purgecss-with-wordpress').whitelistPatterns,
   });

mix.js('resources/assets/scripts/app.js', 'scripts')
   .js('resources/assets/scripts/customizer.js', 'scripts')
   .blocks('resources/assets/scripts/editor.js', 'scripts')
   .extract();

mix.copyWatched('resources/assets/images/**', 'dist/images')
   .copyWatched('resources/assets/fonts/**', 'dist/fonts');

mix.autoload({
  jquery: ['$', 'window.jQuery'],
});

mix.options({
  processCssUrls: false,
});

mix.sourceMaps(false, 'source-map')
   .version();
