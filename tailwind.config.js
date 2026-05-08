/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary-blue': '#002147',
        'maroon': '#481515',
        'accent-yellow': '#fdb813',
      },
    },
  },
  plugins: [],
}
