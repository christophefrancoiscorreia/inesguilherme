jQuery(function ($) {
    const body = $('body');

    var swiper = new Swiper("#swiper", {
        loop: true,
        speed: 500,
        allowTouchScreen: true,
        pagination: {
          el: ".home-pagination",
          clickable: true,
        },
    });  
  
}); 