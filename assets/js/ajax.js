jQuery(document).ready(function ($) {



$(document).on('click', '.collection', function(){
        

        var that = $(this);
        var id = that.data('collection');
        var ajaxUrl = that.data('url');
        

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
                setTimeout(function() {$('.single-collection-content').css('opacity', '1');}, 300);
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