/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    100: "#0842a6",
                    200: "#002d7a",
                    300: "#041e42",
                },
                gray: {
                    100: "#818ea0",
                    600: "#606063",
                },
                offwhite: {
                    100: "#FAF9F6",
                },
            },
        },
    },
    plugins: [],
};
