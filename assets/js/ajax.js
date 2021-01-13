jQuery(document).ready(function ($) {



$(document).on('click', '.collection', function(){
        

        var that = $(this);
        var id = that.data('collection');
        var ajaxUrl = that.data('url');
        $('.audio-home')[0].volume = 0.3;
       

        $.ajax({

            url: ajaxUrl,
            type: 'post',
            data: {

                id: id,
                action: 'category_btn' 

            },
            error: function( response ){
                console.log(response.error);
            },
            success: function( response ){

                $('.ajax-result-container').append( response );
                setTimeout(function() {

                    $('.single-collection-content').css('opacity', '1');


                }, 300);
                setTimeout(function() {
                    $('.audio-collection')[0].play();
                }, 800);

                if($(window).width() > 990){
                    $('.ajax-result-container').css('width', '520px');
                    $('.main-content').css('margin-left', '520px');
                } else {
                    $('.ajax-result-container').css('width', '100%');
                }
            
            } 

        });




});

    

    

});