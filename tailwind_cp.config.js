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
                'header-bg': "url('/komayuh/storage/header-bg.png')",
                'handmade1': "url('/komayuh/storage/handmade1.png')",
                'pottery': "url('/komayuh/storage/pottery.png')",
                'flag-img': "url('/komayuh/storage/flag1.png'), url('/komayuh/storage/flag2.png')",
            },
            backgroundPosition: {
                'flag-position': 'top, bottom',
            }
        },
    },
    plugins: [],
    important: true,
};
