const colors = require('tailwindcss/colors.js')
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    theme: {
        fontFamily: {
            db_heaventrounded: ['db_heaventrounded',...defaultTheme.fontFamily.sans],
            sans: ['db_heaventrounded', ...defaultTheme.fontFamily.sans],
            default: ['db_heaventrounded', ...defaultTheme.fontFamily.sans],
        },
        
        fontSize: {
            sm: ['clamp(1rem,1.2rem,1.5rem)','clamp(0.9rem,1rem,1.25rem)'],
            base: ['clamp(1rem,1.2rem,1.5rem)','clamp(0.9rem,1rem,1.25rem)'],
            xl: '1.25rem',
            '2xl': '1.5rem',
            '3xl': ['clamp(2rem,2.5rem,3rem)','clamp(1.5rem,1.8rem,2.5rem)'],
            '4xl': '5rem',
            '5xl': '5rem',
        },
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
