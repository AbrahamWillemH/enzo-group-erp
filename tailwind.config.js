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
                'brown-enzo' : '#C29C5B',
                'accept' : '#278d3d',
                'decline': '#c7313d',
                'disabled': '#808080',
                'green-main': '#00441B',
                'green-shadow': '#28623F',
                'green-light': '#F7FCF5',
                'green-dark': '#8A9F92',
                'cream': '#F0EBCE',

            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                mont: ['Montserrat', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
