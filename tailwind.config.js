const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        'resources/views/**/*.blade.php',
    ],

    future: {
        hoverOnlyWhenSupported: true,
    },

    theme: {
        container: {
            center: true,
            padding: '1rem',
        },

        extend: {
            fontFamily: {
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
