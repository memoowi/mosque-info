/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'mons': ['Montserrat', 'sans-serif'],
        'teko': ['Teko', 'sans-serif'],
      },
      backgroundImage : {
        'background-img': "linear-gradient(to bottom, rgba(255, 255, 255, 0.441), rgba(30, 1, 45, 0.489), rgba(0, 0, 0, 0.803)), url('../../public/masjid.jpg')",
      }
    },
  },
  plugins: [],
}

