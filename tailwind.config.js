// JIT Mode does not work well with the watch functionality, it just keeps going and going and going.
module.exports = {
  mode: 'jit',
  purge: ['./**/*.php', "./src/app.js"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px'
    },
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
          'weathered-blue': `url('${baseURL}/backgrounds/weatheredBlue.png')`,
          'paper-curves': `url('${baseURL}/backgrounds/paperCurves.png')`,
          'quote': `url('${baseURL}/icons/quote.png')`,
          'quote-yellow': `url('${baseURL}/icons/quoteYellow.png')`,
          'scurve-start': `url('${baseURL}/backgrounds/sCurve_part1.png')`,
          'scurve-mid': `url('${baseURL}/backgrounds/sCurve_part2.png')`,
          'scurve-end': `url('${baseURL}/backgrounds/sCurve_part3.png')`,
          'disrupt-yourself': `url('${baseURL}/backgrounds/disruptYourself.png')`,
          'smart-growth': `url('${baseURL}/books/smartGrowth.png')`,
          'speaking': `url('${baseURL}/backgrounds/speaking.png')`,
          'jumbotron': `url('${baseURL}/backgrounds/jumbotronBg.jpg')`,
          'red-check': `url('${baseURL}/icons/checkRed.png')`,
        }
      },
      backgroundSize: {
        '60%': '60%',
      },
      boxShadow: {
        'behind': '0px 0px 31px rgba(0, 0, 0, 0.1)',
        'card': '0px 0px 15px rgba(0, 0, 0, 0.1)'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
