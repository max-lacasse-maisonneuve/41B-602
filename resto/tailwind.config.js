/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            secondaire: "LemonTuesday",
        },

        extend: {
            colors: {
                patate: "#ff0000",
            },
        },
    },
    plugins: [],
};
