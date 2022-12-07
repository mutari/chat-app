/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'montserrat': ['Montserrat', 'sans-serif']
        },
        extend: {},
    },
    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/line-clamp')
    ],
}
