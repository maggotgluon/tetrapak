const colors = require('tailwindcss/colors.js')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                main:'#3C2415',
                sub:'#97451C',
                primary:{
                    100:'#8B4D36',
                    200:'#945E3F',
                    300:'#B3724F',
                    400:'#AF8948',
                    500:'#B6B284',
                },
                variantsA:{
                    100:'#A7B69C',
                    200:'#A3C2C4',
                    300:'#9298AA',
                },
                variantsB:{
                    100:'#A3767C',
                    200:'#CE9FA6',
                    300:'#C69D84',
                    400:'#B56833',
                }
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
