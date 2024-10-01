import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },

            keyframes: {
                slideToTopLeft: {
                    '0%': { transform: 'translate(100%, 100%)', opacity: '0' },
                    '50%': { transform: 'translate(100%, 100%)', opacity: '0.5' },
                    '100%': { transform: 'translate(0, 0)', opacity: '1', position: 'absolute', rotate: '25deg', left: 0, top: '50%', scale: '1.50' },
                },
                slideToTopRight: {
                    '0%': { transform: 'translate(-100%, -100%)', opacity: '0' },
                    '50%': { transform: 'translate(-100%, -100%)', opacity: '0.5' },
                    '100%': { transform: 'translate(0, 0)', opacity: '1', position: 'absolute', rotate: '340deg', right: 0, top: '50%', scale: '1.50' },
                },

                slideFromTopLeft: {
                    '100%': { transform: 'translate(100%, 100%)', opacity: '0' },
                    '50%': { transform: 'translate(100%, 100%)', opacity: '0.5' },
                    '0%': { transform: 'translate(0, 0)', opacity: '1', position: 'absolute', rotate: '25deg', left: 0, top: '50%', scale: '1.50' },
                },
                slideFromTopRight: {
                    '100%': { transform: 'translate(-100%, -100%)', opacity: '0' },
                    '50%': { transform: 'translate(-200%, -150%)', opacity: '0.5' },
                    '0%': { transform: 'translate(0, 0)', opacity: '1', position: 'absolute', rotate: '340deg', right: 0, top: '50%', scale: '1.50' },
                },
            },

            animation: {
                'lineOne': 'slideToTopLeft 0.5s ease forwards',
                'lineTwo': 'slideToTopRight 1.0s ease forwards',

                'lineOneReverse': 'slideFromTopLeft 0.5s ease forwards',
                'lineTwoReverse': 'slideFromTopRight 0.5s ease forwards',
            },

            colors: {
                'newblack': '#131312',
                'lightblack': '#1C1C1C',
            }
        },
    },

    plugins: [forms, typography],
};
