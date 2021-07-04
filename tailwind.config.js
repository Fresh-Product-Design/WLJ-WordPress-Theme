// JIT Mode does not work well with the watch functionality, it just keeps going and going and going.
module.exports = {
  mode: 'jit',
  purge: ['./**/*.php', "./src/app.js"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'headline': ['Montserrat', 'sans-serif'],
      'general': ['Karla', 'sans-serif']
    },
    extend: {
      backgroundImage: theme => {
        const baseURL = '/wp-content/themes/whitneyjohnson/src/assets/images';
        return {
          'header-waves': `url('${baseURL}/homeHeader.png')`,
          'quote': `url('${baseURL}/quote.png')`,
          'quote-yellow': `url('${baseURL}/quoteYellow.png')`,
          'scurve-start': `url('${baseURL}/sCurve_part1.png')`,
          'scurve-mid': `url('${baseURL}/sCurve_part2.png')`,
          'scurve-end': `url('${baseURL}/sCurve_part3.png')`,
          'paper-curves': `url('${baseURL}/paperCurves.png')`,
        }
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
