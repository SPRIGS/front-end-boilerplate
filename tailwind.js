module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    fontFamily: {
      'sans': ['Rubik', 'sans-serif'],
      'serif': ['Rubik', 'sans-serif'],
      'mono': ['Rubik', 'sans-serif'],
      'display': ['Rubik', 'sans-serif'],
      'body': ['Rubik', 'sans-serif'],
     }
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
