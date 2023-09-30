/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "header-bg": "url('/storage/header-bg.png')",
                "flag-img":
                    "url('/storage/flag1.png'), url('/storage/flag2.png')",
            },
            backgroundPosition: {
                "flag-position": "top, bottom",
            },
        },
    },
    plugins: [],
    important: true,
};
