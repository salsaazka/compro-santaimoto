/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        fontBlue: '#096193', // Warna kustom
    },
    fontFamily: {
      saira: ['Saira', 'sans-serif'], // Tambahkan font Saira
    },
    },
  },
  plugins: [],
}
