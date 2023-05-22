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
                'poppins': ['Poppins', 'ui-sans-serif']
                //sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            fontSize: {
                xs: ['10px', '16px'],
                sm: ['12px', '16px'],
                base: ['14px', '24px'],
                lg: ['16px', '24px'],
                xl: ['18px', '24px'],
                '2xl': ['20px', '32px'],
                '3xl': ['24px', '32px'],
                '4xl': ['28px', '40px'],
                '5xl': ['30px', '40px'],
                '6xl': ['32px', '48px'],
                '7xl': ['40px', '56px']
            },

            colors: {
                //Neutral
                'neutral-10': '#FFFFFF',
                'neutral-20': '#DCDCDC',
                'neutral-30': '#D5D5D5',
                'neutral-40': '#C9C9C9',
                'neutral-50': '#AEAEAE',
                'neutral-60': '#8E8E8E',
                'neutral-70': '#6E6E6E',
                'neutral-80': '#393939',
                'neutral-90': '#DCDCDC',

                //Primary
                'primary-main': '#045BB2',
                'primary-surface': '#EFF5FA',
                'primary-border': '#B1CCE7',
                'primary-hover': '#034C94',
                'primary-pressed': '#022E59',
                'primary-focused': '#B8C9DB',
            }
        },
    },

    plugins: [forms, require('flowbite/plugin')],
};
