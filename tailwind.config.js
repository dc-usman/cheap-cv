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
      }   
},
  plugins: [],
}
