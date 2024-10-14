// webpack.mix.js
const mix = require("laravel-mix");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);

// Add BrowserSync configuration
mix.browserSync({
    proxy: "http://localhost:8000", // URL of your local Laravel dev server
    files: [
        "resources/views/**/*.blade.php",
        "resources/css/**/*.css",
        "resources/js/**/*.js",
        "app/**/*.php",
        "routes/**/*.php",
    ],
    open: false,
    notify: false,
});
