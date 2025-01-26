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
                'pack-cal': '#A888B5',
                'invit-cal': '#7286D3',
                'souv-cal': '#BC7C7C',
                'invit-cal-hover': '#3c4c8c',
                'pack-cal-hover': '#5b336b',
                'souv-cal-hover': '#8e4545',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                mont: ['Montserrat', 'sans-serif'],
            },
            keyframes: {
                carousel: {
                    '0%': { transform: 'translateX(0%)' },
                    '25%': { transform: 'translateX(-25%)' },
                    '50%': { transform: 'translateX(-50%)' },
                    '75%': { transform: 'translateX(-75%)' },
                    '100%': { transform: 'translateX(-100%)' },
                },
                rotateContainers1: {
                    '0%': { transform: 'translateX(-0.5rem)',width: '15rem', height:'20rem', zIndex: 5 },
                    '33.33%': { transform: 'translateX(29.7rem)',width: '15rem', height:'20rem', zIndex: 5 },
                    '66.66%': { transform: 'translateX(12.7rem)', width: '20rem', height:'25rem', zIndex: 10 },
                    '100%': { transform: 'translateX(-0.5rem)',width: '15rem', height:'20rem', zIndex: 5 },
                },
                rotateContainers2: {
                    '0%': { transform: 'translateX(0rem)',width: '20rem', height:'25rem', zIndex: 10 },
                    '33.33%': { transform: 'translateX(-13rem)',width: '15rem', height:'20rem', zIndex: 5 },
                    '66.66%': { transform: 'translateX(13rem)',width: '15rem', height:'20rem', zIndex: 5 },
                    '100%': { transform: 'translateX(0rem)',width: '20rem', height:'25rem', zIndex: 10 },
                },
                rotateContainers3: {
                    '0%': { transform: 'translateX(0.5rem)',width: '15rem', height:'20rem', zIndex: 5 },
                    '33.33%': { transform: 'translateX(-12.5rem)',width: '20rem', height:'25rem', zIndex: 10 },
                    '66.66%': { transform: 'translateX(-29.6rem)',width: '15rem', height:'20rem', zIndex: 5 },
                    '100%': { transform: 'translateX(0.5rem)',width: '15rem', height:'20rem', zIndex: 5 },
                },
              },
              animation: {
                carousel: 'carousel 10s linear infinite',
                rotateContainers1: 'rotateContainers1 12s ease-in-out infinite',
                rotateContainers2: 'rotateContainers2 12s ease-in-out infinite',
                rotateContainers3: 'rotateContainers3 12s ease-in-out infinite',
              },
        },
    },
    plugins: [],
};
