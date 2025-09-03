Fancybox.bind("[data-fancybox]", {
      Image: {
        zoom: true,
        wheel: true, 
      },
      
      Toolbar: {
        display: {
          left: [],
          middle: [],
          right: ["zoom", "close"], 
        },
      },
      
      Thumbs: {
        autoStart: false,
      },
});