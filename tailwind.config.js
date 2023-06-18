/** @type {import('tailwindcss').Config} */
export default {
    content: [
        'resources/views/**/*.blade.php',
    ],

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
