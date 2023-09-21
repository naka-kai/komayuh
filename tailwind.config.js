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
                'header-bg': "url('/storage/header-bg.png')",
                'handmade1': "url('/storage/handmade1.png')",
                'pottery': "url('/storage/pottery.png')",
                'flag-img': "url('/storage/flag1.png'), url('/storage/flag2.png')",
            },
            backgroundPosition: {
                'flag-position': 'top, bottom',
            }
        },
    },
    plugins: [],
    important: true,
};
