module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        width: {
            '1-12': '8.3333%',
            '2-12': '16.6666%',
            '3-12': '24.9999%',
            '4-12': '33.2222%',
            '5-12': '41.5555%',
            '6-12': '49.8888%',
            '7-12': '58.1111%',
            '8-12': '66.4444%',
            '9-12': '74.7777%',
            '10-12': '82.9999%',
            '11-12': '90.2222%',
            '12-12': '1007%',
        }
    },
  },
  variants: {
    extend: {
        backgroundColor: ['even']
    },
  },
  plugins: [],
}
