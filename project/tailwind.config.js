/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php", // Memantau semua file Blade di dalam resources dan sub-direktori
    "./resources/**/*.js",        // Memantau semua file JavaScript di dalam resources dan sub-direktori
    "./resources/**/*.vue",       // Memantau semua file Vue di dalam resources dan sub-direktori
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
