import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
        },
        backgroundImage: {
            'home': "url('https://portfolio-main-o3er6e.laravel.cloud/images/portfolio-background.png')",
            'sebastian': "url('http://laravel-portfolio.test/images/sebastian.png')",
            
        }
    },

    plugins: [forms],
};
