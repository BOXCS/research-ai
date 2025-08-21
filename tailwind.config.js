/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.tsx",
    "./resources/**/*.ts",

    "../../../../vendor/diogogpinto/filament-auth-ui-enhancer/resources/**/*.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

