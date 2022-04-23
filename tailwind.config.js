const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                layout: {
                  'orange' : '#FECA53',
                  'light' : '#FFF849',
                },
                blue: {
                  'custom' : '#112B4C',
                },

              },

            height: {
                '1/12':  '8.333333%',
                '2/12':	'16.666667%',
                '3/12':	'25%',
                '4/12':	'33.333333%',
                '5/12':	'41.666667%',
                '6/12':	'50%',
                '7/12':	'58.333333%',
                '8/12':  '66.666667%',
                '9/12':  '75%',
                '10/12':	'83.333333%',
                '11/12':	'91.666667%',
            },

            margin: {
                '1/12':  '8.333333%',
                '2/12':	'16.666667%',
                '3/12':	'25%',
                '4/12':	'33.333333%',
                '5/12':	'41.666667%',
                '6/12':	'50%',
                '7/12':	'58.333333%',
                '8/12':  '66.666667%',
                '9/12':  '75%',
                '10/12':	'83.333333%',
                '11/12':	'91.666667%',
            },

            padding: {
                '25': '7.25rem',
                '26': '7.5rem',
                '27': '7.75rem',
                '1/12':  '8.333333%',
                '2/12':	'16.666667%',
                '3/12':	'25%',
                '4/12':	'33.333333%',
                '5/12':	'41.666667%',
                '6/12':	'50%',
                '7/12':	'58.333333%',
                '8/12':  '66.666667%',
                '9/12':  '75%',
                '10/12':	'83.333333%',
                '11/12':	'91.666667%',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
