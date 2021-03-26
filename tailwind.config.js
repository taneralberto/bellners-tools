module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [
    './*.php'
  ],
  theme: {
    extend: {
      colors:{
        'bln-dark-primary' : 'hsl(0, 0%, 7%)',
        'bln-dark-secondary' : 'hsl(0, 0%, 15%)',
        'bln-dark-third' : 'hsl(0, 0%, 27%)',
        'bln-red' : 'hsl(7, 100%, 55%)',
        'bln-gray-font' : 'hsl(0, 0%, 49%)',
        'bln-white-font' : 'hsl(0, 0%, 100%)',
      }
    },
  },
  variants: {},
  plugins: [
    require('tailwindcss-scroll-snap'),
  ],
}
