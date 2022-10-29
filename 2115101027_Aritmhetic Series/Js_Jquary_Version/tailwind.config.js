/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    container: {
        center:true,
    },
    extend: {
      colors: {
        primaryblue: '#1e40af',
        second: '#f9a53b',
        third: '#4338ca',
      },
      screens: {
        '2xl':'1320px'
      }
    },
  },
  plugins: [],
}
