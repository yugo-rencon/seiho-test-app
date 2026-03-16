const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                // poppins: ['Poppins', 'sans-serif'],
                sans: [...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xxs': '0.6rem', // 例として0.6remを定義
            },
            colors: {
                body: "#050505",
                "selected-text": "#A3A3FF",
                theme: "#5c318c",
                secondary: "#9191A4",
                badge: "#3F3F51",
                inputBorder: "#565666",
                input: "#2A2A33",
                brown: {
                  50: '#fdf8f6',
                  100: '#f2e8e5',
                  200: '#eaddd7',
                  300: '#e0cec7',
                  400: '#d2bab0',
                  500: '#bfa094',
                  600: '#a18072',
                  700: '#977669',
                  800: '#4e0c00',
                  900: '#43302b',
                },
                primary: {
                    100: '#ebf8ff',
                    300: '#90cdf4',
                    500: '#4299e1',
                },
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
