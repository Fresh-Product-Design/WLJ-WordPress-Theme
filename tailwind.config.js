// JIT Mode does not work well with the watch functionality, it just keeps going and going and going.
module.exports = {
  mode: 'jit',
  purge: ['./**/*.php', "./src/app.js"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'headline': ['DIN Engschrift Std', 'sans-serif'],
      'subhead': ['Montserrat', 'sans-serif'],
      'general': ['Karla', 'sans-serif']
    },
    extend: {
      backgroundImage: theme => {
        const baseURL = '/wp-content/themes/whitneyjohnson/src/assets/images';
        return {
          'header-waves': `url('${baseURL}/backgrounds/homeHeader.png')`,
          'quote': `url('${baseURL}/icons/quote.png')`,
          'quote-yellow': `url('${baseURL}/icons/quoteYellow.png')`,
          'scurve-start': `url('${baseURL}/backgrounds/sCurve_part1.png')`,
          'scurve-mid': `url('${baseURL}/backgrounds/sCurve_part2.png')`,
          'scurve-end': `url('${baseURL}/backgrounds/sCurve_part3.png')`,
          'jumbotron': `url('${baseURL}/backgrounds/jumbotronBg.jpg')`,
          'red-check': `url('${baseURL}/icons/checkRed.png')`,
        }
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
