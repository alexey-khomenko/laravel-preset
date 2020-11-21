module.exports = {
  purge: {
    //enabled: true,
    content: [
        './resources/views/**/*.blade.php',
        './Modules/*/Resources/views/**/*.blade.php'
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
