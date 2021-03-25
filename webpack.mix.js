const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 */
mix.js("resources/js/app.js", "public/js/v1_0_app.js")
    .sass("resources/sass/app.scss", "public/css/v1_0_app.css");

//hot reload
mix.browserSync({
    proxy: "http://localhost:8000",
    snippetOptions: {
        rule: {
            match: /<\/body>/i,
            fn: function (snippet, match) {
                return snippet + match;
            },
        },
    },
});

//disable windows notification
mix.disableNotifications();
