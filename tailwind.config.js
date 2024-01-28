import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors : {
        primary : '#fafafa',
        secondary : '#475569',
        third : '#0ea5e9'
      },
      fontFamily : {
        sans: ['Figtree','Inter', ...defaultTheme.fontFamily.sans],
      }
    },
  },
  plugins: [],
}

