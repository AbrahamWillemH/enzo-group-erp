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
            colors: {
                'brown-main' : '#875C36',
                'brown-light': '#ac7b51',
                'accept' : '#278d3d',
                'decline': '#c7313d',
                'disabled': '#808080',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                mont: ['Montserrat', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
