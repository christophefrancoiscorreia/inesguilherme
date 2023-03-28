jQuery(function($){
    const body = $('body');

    body.on('click', '[data-copy]', function(e){
        e.preventDefault();
        const self = $(this),
        param = self.attr('data-copy'),
        brRegex = /<br\s*[\/]?>/gi; 

        navigator.clipboard.writeText(param.replace(brRegex, "\r\n")).then(
            function(){
                //alert("yeah!"); // success 

                self.find('.title').addClass('copied');

                setTimeout(function(){
                    self.find('.title').removeClass('copied');
                }, 2500);
            })
          .catch( 
             function() {
                //alert("err"); // error
                self.find('.title').addClass('error');

                setTimeout(function(){
                    self.find('.title').removeClass('error');
                }, 2500);
            });

    });
})