/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './src/**/*.{html,js}',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './node_modules/tw-elements/dist/js/**/*.js',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('tw-elements/dist/plugin'),
        require('flowbite/plugin')
    ],
}