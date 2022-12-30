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
        extend: {
            boxShadow: {
                'top-left': '5px 5px 10px rgb(25, 25, 25), -5px -5px 10px rgb(60, 60, 60)',
            }
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/line-clamp')
    ],
}
