import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                heading: ['Raleway', ...defaultTheme.fontFamily.sans],
                body: ['"Open Sans"', ...defaultTheme.fontFamily.sans],
                logo: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    dark: '#003f48',
                    navy: '#2f4d5a',
                    accent: '#67b0d1',
                    'accent-light': '#8ec4dd',
                    'accent-hover': '#86c0da',
                    'accent-soft': '#7bbad7',
                    border: '#385b6b',
                },
                surface: {
                    DEFAULT: '#f4f9fc',
                    alt: '#f8fbfd',
                    muted: '#ecf5f9',
                },
                body: {
                    DEFAULT: '#444444',
                    dark: '#111111',
                    muted: '#777777',
                    subtle: '#999999',
                    faint: '#848484',
                },
            },
        },
    },

    plugins: [forms],
};
