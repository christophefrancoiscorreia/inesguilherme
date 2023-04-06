jQuery(function($){
    const body = $('body');
    setTimeout(function(){
        $('#popup').fadeIn(550);
    }, 24000);

    body.on('click', '.modal-close', function(e){ 
        e.preventDefault();
        $('.modal').hide(); 
    });
 
    body.on('click', '.modal', function(){
        if($('.modal-content:hover').length === 0){
            $('.modal').hide();
        } 
    });
});