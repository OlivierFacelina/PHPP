const plugin = require('tailwindcss/plugin');

module.exports = {
  purge: {
    enabled: true,
    content: ['./*.php'],
  },
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      gridTemplateAreas: {
        'layout': [
          'nav header header',
          'nav main .',
          'footer footer footer',
        ],
      },
      gridTemplateColumns: {
        'layout': '4rem 1fr 2rem',
      },
      gridTemplateRows: {
        'layout': '4rem 1fr auto',
      },

      ratios: {
            '16/9': [16, 9],
            '4/3': [4, 3],
            '3/2': [3, 2],
            '1/1': [1, 1],
          },
    },
  },
  variants: {
    gridTemplateAreas: ['responsive'],
    aspectRatio: ['before', 'hover_before', 'responsive'],
    mixBlendMode: ['responsive'],
    backgroundBlendMode: ['responsive'],
    isolation: ['responsive'],
    extend: {
    }
  },
  plugins: [
    require('@savvywombat/tailwindcss-grid-areas'),
    require('tailwindcss-pseudo-elements'),
    require('tailwindcss-aspect-ratio'),
    require('tailwindcss-blend-mode')(),
    plugin(function ({ addUtilities }) {
      addUtilities(
        {
          '.empty-content': {
            content: "''",
          },
          '.block': {
            display: 'block',
          },
        },
        ['before', 'after']
      )
    }),
  ],
}