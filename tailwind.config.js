/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,liquid,js}'],
  theme: {
    extend: {
      colors: {
        lime: {
          25: '#fbfef3',
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
