/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
                'up': '0 -4px 6px -1px rgba(0,0,0,0.12), 0 -2px 4px -2px rgba(0,0,0,0.24)',
            },
            fontFamily: {
                'rubik': ['Rubik', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('daisyui'),
    ],
    daisyui: {
        themes:[
            {
                mytheme: {
                    "primary": "#FF6F00",
                    "secondary": "#8870FA",
                    "accent": "#00ff6f",
                    "neutral": "#333333",
                    "base-100": "#F5F5F5",
                    "info": "#3ABFF8",
                    "success": "#36D399",
                    "warning": "#FBBD23",
                    "error": "#F87272",
                }
            }
        ],
    },
}
