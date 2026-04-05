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
                teal: {
                    DEFAULT: '#0F6E56',
                    light: '#E1F5EE',
                    mid: '#1D9E75',
                    dim: '#9FE1CB',
                },
                red: {
                    DEFAULT: '#E24B4A',
                    light: '#FCEBEB',
                },
                amber: {
                    DEFAULT: '#BA7517',
                    light: '#FAEEDA',
                    mid: '#EF9F27',
                },
                blue: {
                    DEFAULT: '#185FA5',
                    light: '#E6F1FB',
                    mid: '#378ADD',
                },
                purple: {
                    DEFAULT: '#534AB7',
                    light: '#EEEDFE',
                },
                gray: {
                    50: '#F1EFE8',
                    100: '#D3D1C7',
                    400: '#888780',
                    600: '#5F5E5A',
                    800: '#444441',
                    900: '#2C2C2A',
                },
            },
            fontFamily: {
                sans: ['DM Sans', ...defaultTheme.fontFamily.sans],
                mono: ['DM Mono', 'monospace'],
            },
        },
    },
    plugins: [],
};
