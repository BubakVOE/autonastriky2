const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            animation: {
                backdrop: 'backdrop 20s infinite',
            },

            keyframes: {
                backdrop: {
                    '0%': {
                        backgroundColor: '#4F4F4F',
                    },
                    '50%': {
                        backgroundColor: '#626262',
                    },
                    '100%': {
                        backgroundColor: '#4F4F4F',
                    },

                },
            },

            fontFamily: {
                Poppins: 'Poppins, sans-serif',
                Roboto: 'Roboto, sans-serif',
                Rubik: 'Rubik, sans-serif',
            },

            colors: {
                layout: {
                  'black':'#161616',
                  'gray':'#4F4F4F',
                  'lightgray':'#626262',
                  'red':'#FA3431',
                  'white':'#FFFCF2',

                  'green':'#00FF00',
                },
                blue: {
                  'custom' : '#112B4C',
                },

              },

            boxShadow: {
                layoutInner: 'inset 15px 15px 34px #b6b6b6, inset -15px -15px 34px #fcfcfc',
                inSmaller: 'inset 3px 3px 13px #b3b6bb, inset -3px -3px 13px #D2D6DC',
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
