// JIT Mode does not work well with the watch functionality, it just keeps going and going and going.
module.exports = {
  mode: 'jit',
  purge: ['./**/*.php'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'headline': ['Montserrat', 'sans-serif'],
      'general': ['Karla', 'sans-serif']
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
