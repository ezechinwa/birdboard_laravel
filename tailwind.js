module.exports = {
  theme: {
    
    buttonblue:{
      // backgroundColor: '#47cdff',
      // @apply bg-blue-500 text-white;
      
    },
    extend: {
      backgroundColor: theme => ({
        'greybackground': '#F5F6F9'
       }),
       boxShadow: {
        default: '0 0 5px 0 rgba(0,0,0,0.08)',
        md: ' 0 4px 6px -1px rgba(0, 0, 0, .1), 0 2px 4px -1px rgba(0, 0, 0, .08)',
        lg: ' 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05)',
        xl: ' 0 20px 25px -5px rgba(0, 0, 0, .1), 0 10px 10px -5px rgba(0, 0, 0, .04)',
        inner: 'inset 0 2px 4px 0 rgba(0,0,0,0.06)',
      outline: '0 0 0 3px rgba(66,153,225,0.5)',
      focus: '0 0 0 3px rgba(66,153,225,0.5)',
        'none': 'none',
      },
   
      
    }
  },
  variants: {},
  plugins: []
}
