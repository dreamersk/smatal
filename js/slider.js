$('.testimonials_slider').slick({
   dots: false,
   autoplay:true,
   infinite: false,
   speed: 300,
   slidesToShow: 1,
   slidesToScroll: 1,
   responsive: [
      {
         breakpoint: 1024,
         settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         infinite: true,
         dots: true
         }
      },
      {
         breakpoint: 600,
         settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         nav:false
         }
      },
      {
         breakpoint: 480,
         settings: {
         slidesToShow: 1,
         slidesToScroll: 1,
         nav:false
         }
      }
   ]
});
