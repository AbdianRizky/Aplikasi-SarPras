const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .sass("resources/sass/auth.scss", "public/css/auth.css")
    .sass("resources/sass/welcome.scss", "public/css/welcome.css")

    /*
 |--------------------------------------------------------------------------
 | Optional
 |--------------------------------------------------------------------------
 | untuk merefresh halaman web secara otomatis ketika ada suatu file yang
 | mengalami perubahan di dalamnya.
 */
    .browserSync({
        proxy: "localhost:8000"
    });
