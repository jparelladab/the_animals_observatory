jQuery(document).ready(function ($) {


var opts = {
    dots: true,
    customPaging: function(slider, i) {
    // this example would render "tabs" with titles
        return '<i class="fa fa-circle"></i>';
    },
    infinite: true,
    speed: 700,  
    slidesToShow: 1, 
    arrows: false,
    fade: true,
    centerMode: true,
}

$('.single-collection-slider').slick('unslick');

/* Ajax functions */
    $(document).on('click', '.category-image', function(){
        

        var that = $(this);
        var slug = that.data('image');
        var ajaxUrl = that.data('url');


        $.ajax({

            url: ajaxUrl,
            type: 'post',
            data: {

                slug: slug,
                action: 'category_btn' 

            },
            error: function( response ){
                console.log(response.error);
            },
            success: function( response ){

                $('.ajax-result-container').append( response );
                $('.ajax-result-container').css('left', '0');
                if($(window).width() > 990){
                    $('.ajax-result-container').css('width', '520px');
                    $('.main-content').css('margin-left', '520px');
                } else {
                    $('.ajax-result-container').css('width', '100%');
                }
                
                $('.single-collection-slider').slick(opts);
                $('.single-collection-slider').css('opacity', '1');
            } 

        });




    });

    $(document).on('click', '.collection', function(){
        

        var that = $(this);
        var id = that.data('collection');
        var ajaxUrl = that.data('url');


        $.ajax({

            url: ajaxUrl,
            type: 'post',
            data: {

                id: id,
                action: 'category_btn_slider' 

            },
            error: function( response ){
                console.log(response.error);
            },
            success: function( response ){

                $('.ajax-result-container').append( response );
                $('.ajax-result-container').css('left', '0');
                if($(window).width() > 990){
                    $('.ajax-result-container').css('width', '520px');
                    $('.main-content').css('margin-left', '520px');
                } else {
                    $('.ajax-result-container').css('width', '100%');
                }
                $('.single-collection-slider').slick(opts);
                $('.single-collection-slider').css('opacity', '1');
            } 

        });




    });

    

    

});