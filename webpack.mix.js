const mix = require("laravel-mix");

/**
 * mix says that whatever is in resources/js/app.js should be compile into public/js file
 * any posttcss in the resources/caa/app.css should be compile into public/css file
 */
mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);
