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
                black: "#060606",
            },
            fontFamily: {
                hanken: ["Hanken Grotesk", "san-serif"],
            },

            fontSize: {
                "2xs": ".625re",
            },
        },
    },
    plugins: [],
};
