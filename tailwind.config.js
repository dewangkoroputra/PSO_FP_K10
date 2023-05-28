import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
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

                //Grey
                'grey-50': '#F9FAFB',
                'grey-100': '#F3F4F6',
                'grey-200': '#E5E7EB',
                'grey-300': '#D1D5DB',
                'grey-400': '#9CA3AF',
                'grey-500': '#6B7280',
                'grey-600': '#4B5563',
                'grey-700': '#374151',
                'grey-800': '#1F2937',
                'grey-900': '#111827',

                //Blue
                'blue-50': '#EBF5FF',
                'blue-100': '#E1EFFE',
                'blue-200': '#C3DDFD',
                'blue-300': '#A4CAFE',
                'blue-400': '#76A9FA',
                'blue-500': '#3F83F8',
                'blue-600': '#1C64F2',
                'blue-700': '#1A56DB',
                'blue-800': '#1E429F',
                'blue-900': '#233876',

                //Red
                'red-50': '#FDF2F2',
                'red-100': '#FDE8E8',
                'red-200': '#FBD5D5',
                'red-300': '#F8B4B4',
                'red-400': '#F98080',
                'red-500': '#F05252',
                'red-600': '#E02424',
                'red-700': '#C81E1E',
                'red-800': '#9B1C1C',
                'red-900': '#771D1D',

                 //Green
                'green-50': '#F3FAF7',
                'green-100': '#DEF7EC',
                'green-200': '#BCF0DA',
                'green-300': '#84E1BC',
                'green-400': '#31C48D',
                'green-500': '#0E9F6E',
                'green-600': '#057A55',
                'green-700': '#046C4E',
                'green-800': '#03543F',
                'green-900': '#014737',

                 //Yellow
                'yellow-50': '#FDFDEA',
                'yellow-100': '#FDF6B2',
                'yellow-200': '#FCE96A',
                'yellow-300': '#FACA15',
                'yellow-400': '#E3A008',
                'yellow-500': '#C27803',
                'yellow-600': '#9F580A',
                'yellow-700': '#8E4B10',
                'yellow-800': '#723B13',
                'yellow-900': '#633112'
            }
        },
    },

    plugins: [forms, require('flowbite/plugin')],
};
