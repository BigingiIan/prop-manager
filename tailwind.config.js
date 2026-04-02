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
            },
        },
    },

    plugins: [folder],
};

module.exports = {
    darkMode: 'class',
    content: [
        './resourses/**/*.blade.php',
        './resourses/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                'secondary-fixed-dim': '#d4d4db',
                'on-secondary': '#f9f8ff',
                tertiary: '#5e5c78',
                'inverse-surface': '#0b0f10',
                'on-tertiary-fixed': '#393751',
                'on-tertiary': '#fcf7ff',
                'on-surface': '#283439',
                'on-surface-variant': '#546166',
                'inverse-primary': '#e8eeff',
                'inverse-on-surface': '#9a9d9f',
                'primary-fixed-dim': '#cfd4e5',
                'surface-tint': '#585e6c',
                'on-tertiary-container': '#4b4a65',
                'on-primary-fixed-variant': '#565b69',
                'on-background': '#283439',
                'on-error-container': '#752121',
                'on-error': '#fff7f6',
                'on-secondary-fixed': '#3d3f45',
                'surface-variant': '#d7e5eb',
                'surface-container-lowest': '#ffffff',
                surface: '#f7fafc',
                'error-dim': '#4e0309',
                error: '#9f403d',
                'surface-container-highest': '#d7e5eb',
                'primary-fixed': '#dde2f3',
                'surface-dim': '#ccdde4',
                'primary-container': '#dde2f3',
                'outline-variant': '#a7b4ba',
                'tertiary-container': '#dad6f7',
                'on-primary': '#f7f7ff',
                'tertiary-dim': '#52506b',
                outline: '#707d82',
                'secondary-fixed': '#e2e2e9',
                'secondary-container': '#e2e2e9',
                'error-container': '#fe8983',
                background: '#f7fafc',
                'secondary-dim': '#515359',
                'primary-dim': '#4c5260',
                'on-secondary-fixed-variant': '#5a5b61',
                'tertiary-fixed-dim': '#ccc9e9',
                primary: '#585e6c',
                'tertiary-fixed': '#dad6f7',
                'surface-bright': '#f7fafc',
                'on-tertiary-fixed-variant': '#55536f',
                'on-primary-fixed': '#393f4c',
                'on-secondary-container': '#505157',
                secondary: '#5d5f65',
                'on-primary-container': '#4c525f',
                'surface-container-high': '#dfeaef',
                'surface-container-low': '#eff4f7',
                'surface-container': '#e7eff3',
            },
            fontFamily: {
                headline: ['Manrope'],
                body: ['Inter'],
                label: ['Inter'],
            },
            borderRadius: {
                DEFAULT: '0.125rem',
                lg: '0.25rem',
                xl: '0.5rem',
                full: '0.75rem',
            },
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/container-queries')],
}
