const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      ...colors,

      // front
      'front-primary-lighten-2': colors.sky[400],
      'front-primary-lighten-1': colors.sky[500],
      'front-primary': colors.sky[600],
      'front-primary-darken-1': colors.sky[700],
      'front-primary-darken-2': colors.sky[800],

      'front-dark-lighten-2': colors.gray[400],
      'front-dark-lighten-1': colors.gray[500],
      'front-dark': colors.gray[600],
      'front-dark-darken-1': colors.gray[700],
      'front-dark-darken-2': colors.gray[800],

      'front-light-lighten-2': colors.slate[50],
      'front-light-lighten-1': colors.slate[100],
      'front-light': colors.slate[200],
      'front-light-darken-1': colors.slate[300],
      'front-light-darken-2': colors.slate[400],

      'front-white': colors.white
    }
  },
  plugins: [],
}