jQuery(function ($) {
    const body = $('body');



    body.on('click','.header-tools--open_menu', function(e){
        e.preventDefault();
        if($(this).hasClass('active')){
            $(this).removeClass('active').find('.material-icons').text('menu');
            $('.header .menu').slideUp('slow');
        }else{
            $(this).addClass('active').find('.material-icons').text('close');
            $('.header .menu').slideDown('slow');
        }

    });

    body.on('click','*', function(){
        if($('.header:hover').length === 0 && $(window).width() <= 1060){
            $('.header-tools--open_menu').removeClass('active').find('.material-icons').text('menu');
            $('.header .menu').slideUp('slow');
        }

    });

    if($(window).width() >= 1060){
        body.on('mouseenter', '.menu-item-has-children', function () {
            $(this).addClass('active');
            $('.sub-menu').slideUp('fast');
            $(this).find('.sub-menu').slideDown('fast');
        });
        body.on('mouseleave', '.menu>.menu-item', function () {
            $('.menu-item-has-children').removeClass('active');
            $('.menu-item-has-children').find('.sub-menu').slideUp('fast');
        });

    }else{

        body.on('click', '.menu-item-has-children>a', function (e) {

            if($(this).parent().hasClass('active')){
                $(this).parent().removeClass('active');
                $(this).next().slideUp('fast');
            }else{
                e.preventDefault();
                $('.menu-item-has-children');
                $('.sub-menu').slideUp('fast');
                $(this).parent().addClass('active');
                $(this).next().slideDown('fast');
            }
        });
    }

    $(window).scroll(function () {
       if($(this).scrollTop() > 1){
           $('header.header').addClass('sticky');
       }else{
           $('header.header').removeClass('sticky');
       }
    });
});