const colors = require('tailwindcss/colors');

const variantsMaker = (color, base) => {
  return {
    'light-2': colors[color][(base - 200) <= 50 ? 50 : (base - 200)],
    'light-1': colors[color][(base - 100) <= 50 ? 50 : (base - 100)],
    'normal': colors[color][base],
    'dark-1': colors[color][(base + 100) >= 950 ? 950 : (base + 100)],
    'dark-2': colors[color][(base + 200) >= 950 ? 950 : (base + 200)],
  }
};

/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: ['class', '[theme="dark"]'],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      ...colors,

      front: {
        primary: variantsMaker('indigo', 600),
        secondary: variantsMaker('violet', 600),
        dark: variantsMaker('gray', 800),
        light: variantsMaker('slate', 200),


        success: variantsMaker('teal', 400),
        info: variantsMaker('blue', 500),
        danger: variantsMaker('rose', 400),

        white: colors.white
      },

      admin: {
        primary: variantsMaker('indigo', 600),
        secondary: variantsMaker('violet', 600),
        dark: variantsMaker('gray', 800),
        light: variantsMaker('slate', 200),


        success: variantsMaker('teal', 400),
        info: variantsMaker('blue', 500),
        danger: variantsMaker('rose', 400),

        white: colors.white
      },

      customer: {
        primary: variantsMaker('indigo', 600),
        secondary: variantsMaker('violet', 600),
        dark: variantsMaker('gray', 800),
        light: variantsMaker('slate', 200),


        success: variantsMaker('teal', 400),
        info: variantsMaker('blue', 500),
        danger: variantsMaker('rose', 400),

        white: colors.white
      }
    }
  },
  plugins: [],
}