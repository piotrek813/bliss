const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ["./src/Views/**/*.php"],
  theme: {
    fontFamily: {
      sans: ['Poppins', 'sans-serif'],
    },
    extend: {
      colors: {
        'purple': '#7E63DA',
        'dark-purple': '#25103D',
        'base': {
          100: '#F7F7FD',
          200: '#BFC3E1',
          300: '#7E82A6',
          900: '#5361CE'
        },
        'light-blue': '#F7F7FD',
        'light-pink': '#F9EFFF',
        'light-orange': '#FFF6EF',
        'grey': {
          100: '#F7EFFF',
          700: '#333333'
        }
      },
      backgroundImage: {
        'hero-pattern': "url('/assets/img/hero-waves.svg')",
      },
    },
  },
  plugins: [
    plugin(function({ matchUtilities, theme }) {
      matchUtilities(
        {
          'shadow-bg': (value) => {
            return {
              boxShadow: `0 0 0 100vmax ${value}`,
              clipPath: 'inset(0 -100vmax)'
            }
          },
        },
        { values: theme('colors') })
    }),
  ],
}

