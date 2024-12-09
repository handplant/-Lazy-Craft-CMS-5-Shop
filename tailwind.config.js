const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: ['./templates/**/*.twig'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  }
}

