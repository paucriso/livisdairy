/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
        'lora': ['Lora', 'serif'],
        'poppins': ['Poppins', 'sans-serif']
    },
    extend: {},
  },
  plugins: [],
}

