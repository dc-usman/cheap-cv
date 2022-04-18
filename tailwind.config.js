module.exports = {
  content: ["./src/**/*.{html,js}",
            "./resources/**/*.blade.php"
            ],
  
  theme: {
    extend: {
        backgroundImage: theme => ({
            'bgOurWriters': "url('../../imgs/writersbg.svg')",
            'bgWaves': "url('../../imgs/waves.svg')",
            'bgtabs': "url('../../imgs/tabsbg.svg')",
        }), 
        keyframes: {
          wiggle: {
              '0%, 100%': {
                  transform: 'rotate(-3deg)'
              },
              '50%': {
                  transform: 'rotate(3deg)'
              },
          },
         
      },
      animation: {
          wiggle: 'wiggle 1s ease-in-out infinite',
      },

      }   
},
  plugins: [],
}
