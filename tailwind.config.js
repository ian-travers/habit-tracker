/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Montserrat"', "Arial", "san-serif"],
            },
            colors: {
                primary: {
                    600: "#7F56D9",
                },
            },
        },
    },
    plugins: [],
};
