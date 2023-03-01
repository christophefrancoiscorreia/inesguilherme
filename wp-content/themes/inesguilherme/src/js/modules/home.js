jQuery(function ($) {
    const body = $('body');

    var swiper = new Swiper("#swiper", {
        loop: true,
        speed: 2000,
        /*autoplay: {
            delay: 8000
        },*/
        pagination: {
          el: ".home-pagination",
          clickable: true,
        },
    }); 
 
}); 