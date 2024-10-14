/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            keyframes: {
                slide_subscribes: {
                    '0%': { transform: 'translateX(0)' },
                    '25%': { transform: 'translateX(0)' },
                    '50%': { transform: 'translateX(-50%)' },
                    '75%': { transform: 'translateX(-50%)' },
                    '95%': { transform: 'translateX(-50%)' },
                    '100%': { transform: 'translateX(0%)' },
                },
                slide_journals: {
                    '0%': { transform: 'translateX(0)' },
                    '11.11%': { transform: 'translateX(0)' },
                    '22.22%': { transform: 'translateX(-11.11%)' },
                    '33.33%': { transform: 'translateX(-22.22%)' },
                    '44.44%': { transform: 'translateX(-33.33%)' },
                    '55.55%': { transform: 'translateX(-44.44%)' },
                    '66.66%': { transform: 'translateX(-55.55%)' },
                    '77.77%': { transform: 'translateX(-66.66%)' },
                    '88.88%': { transform: 'translateX(-77.77%)' },
                    '100%': { transform: 'translateX(-88.88%)' },
                },
            },
            animation: {
                slide1: 'slide_subscribes 8s infinite',
                slide2: 'slide_journals 27s infinite',
            },
             screens: {
                'x3la': '1441px', 
                'x2la': '1025px',
                'xla': '769px',
                'lga': '426px',  
                'mda': '376px', 
                'sma': '319px',  
            },
        },
    },
    plugins: [],
};
