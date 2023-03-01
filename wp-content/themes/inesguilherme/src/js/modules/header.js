jQuery(function ($) {
    const body = $('body');

    body.on('click','.nav_opener', function(e){
        e.preventDefault();
        if($(this).hasClass('active')){
            $(this).removeClass('active').find('.material-icons').text('menu');
            $('.header-menu').removeClass('active');
            body.removeClass('overflow_hidden');
        }else{
            $(this).addClass('active').find('.material-icons').text('close');
            $('.header-menu').addClass('active');
            body.addClass('overflow_hidden');
        }
    });

    body.on('click','*', function(){
        if($('.header:hover').length === 0 && $(window).width() <= 1060){
            $('.nav_opener').removeClass('active').find('.material-icons').text('menu');
            $('.header-menu').removeClass('active');
            body.removeClass('overflow_hidden');
        }
    });   
}); 