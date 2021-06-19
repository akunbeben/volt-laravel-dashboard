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
    .postCss("resources/css/app.css", "public/css", [
        //
    ])
    .styles(
        [
            "node_modules/sweetalert2/dist/sweetalert2.css",
            "node_modules/notyf/notyf.min.css",
        ],
        "public/css/vendor.css"
    )
    .scripts(
        [
            "resources/js/vendor.js",
            "node_modules/@popperjs/core/dist/umd/popper.min.js",
            "node_modules/bootstrap/dist/js/bootstrap.min.js",
            "node_modules/onscreen/dist/on-screen.umd.min.js",
            "node_modules/nouislider/distribute/nouislider.min.js",
            "node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js",
            "node_modules/chartist/dist/chartist.min.js",
            "node_modules/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js",
            "node_modules/vanillajs-datepicker/dist/js/datepicker.min.js",
            "node_modules/moment/moment.min.js",
            "node_modules/notyf/notyf.min.js",
            "node_modules/simplebar/dist/simplebar.min.js",
        ],
        "public/js/vendor.js"
    ).sourceMaps();
