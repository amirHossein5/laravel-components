let mix = require("laravel-mix");
require("laravel-mix-purgecss");

mix.postCss("resources/css/app.css", "dist/css/pagination.css")
    .options({
        postCss: [require("tailwindcss")],
    })
    .purgeCss({
        content: ["resources/views/pagination/**/*.blade.php"],
    });

// mix.js("resources/js/pagination.js", "dist/js/pagination.js") // or nothing
//     .postCss("resources/css/app.css", "dist/css/pagination.css") // or
//     .postCss("resources/css/pagination.css", "dist/css/pagination.css") // or
//     .options({
//         postCss: [require("tailwindcss")],
//     })
//     .purgeCss({
//         content: ["resources/views/pagination/**/*.blade.php", "resources/js/pagination.js"] // or just blade
//     });
