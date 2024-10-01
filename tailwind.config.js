module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      borderColor: theme => ({
        ...theme('colors'),
         DEFAULT: theme('colors.slate.300', 'currentColor'),
        'primary': '#3490dc',
        'secondary': '#ffed4a',
        'danger': '#e3342f',
       }),
      container: {
        maxWidth: {
          'sm': '350px',
        },
        center: true,
        padding: {
          'DEFAULT': '1rem',
          'sm': '2rem',
          'lg': '4rem',
          'xl': '5rem',
          '2xl': '6rem',
        },
      },
      screens: {
        'sm': '300px',
        'md': '800px',
        'lg': '1240px',
        'xl': '1280px',
        '2xl': '1536px',
    },
      extend: {
        colors: {

          'admin-dominant': '#FFF',
          'admin-compliment' : '#F4F7FE',
          'admin-ascent' : '#223F97',
          'admin-ascent-dark' : '#071C5C',
  
          'web-dominant': '#FFF',
          'web-complement' : '#E3E3E3',
          'web-ascent-1' : '#223F97',
          'web-ascent-1-dark' : '#071C5C',
          'web-ascent-2' : '#7DB840',
          'web-ascent-2-dark' : '#416A16',
          
        },
        boxShadow: {
          'lg': '0px 0px 12px #7F71B129',
        }
      },
      
    },
    plugins: [],
  }