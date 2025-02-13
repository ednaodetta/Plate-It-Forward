import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'gotham': ['Gotham HTF'],
                'brandon': ['BrandonGrotesque'],
                'brandonLight': ['BrandonGrotesque-Light']
            },
            colors: {
                'DefaultGreen': '#00615F',
                'DefaultWhite': '#F9F3F0',
                'Teal': '#38b2ac'
            },
            maxWidth: {
                '6.7xl': '74rem',
            },
            backgroundImage:{
                'bgbang' : "url('/public/assets/Image/judul.png')",
                'bglocation' : "url('/public/assets/Image/keram_telor.png')",
            },
        },
    },
    plugins: [],
};


