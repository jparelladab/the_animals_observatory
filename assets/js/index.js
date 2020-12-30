


jQuery(document).ready(function ($) {

    

    $.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();

      var viewportTop = $(window).scrollTop() + 60;
      var viewportBottom = viewportTop + $(window).height();

      return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    

    

    //LOADER
    var showTimeout = setTimeout(function() {
        $('.dots').fadeIn(500);
    }, 1000); 

    $(window).on('load', function() {
        
        clearTimeout(showTimeout);
        $('.dots').fadeOut();
        $('.welcome-div').css('opacity', '1');
        
        
    });

    $(document).on('click', '#button-inside', function(){
        $('.loader').fadeOut();
        $('body').css('overflow-y', 'auto');
        $('#ball').css('opacity', '1');
        $('.video_div').children('video').prop('muted', false);
        $('.video_div').children('video').get(0).play();
        $('.lg-row-bg-video').children('video').get(0).play();
        $(document).scrollTop(0); 
        setTimeout(function() {
            var rellax = new Rellax('.rellax', {
                  wrapper:'.gryd-type'
                });
        }, 300);
          
    });

    if($(".loader").css('display') == 'flex') {
        $('body').css('overflow-y', 'hidden');
        console.log("hidden");
    }

   



    
    $('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 15000,
    //gap in pixels between the tickers
    gap: 30,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true,
    startVisible: true
    });

    $('.slideshow').slick({
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
    });

    $('.left').click(function(){
        var el = $(this).data('arrow');
        $('.'+ el).children('.slideshow').slick('slickPrev');
    });
    $('.right').click(function(){
         var el = $(this).data('arrow');
        $('.'+ el).children('.slideshow').slick('slickNext');
    });

    $('.pagina').css('visibility', 'hidden');


    $('.pagina').each(function(i, el){

          if ($(this).isInViewport()) {
              $(this).css('visibility', 'visible');
          } 
       });

    $(window).scroll(function () {
       $('.pagina').each(function(i, el){

          if ($(this).isInViewport()) {
              $(this).css('visibility', 'visible');
              
          } else {

          }
       });

    });


    /// button

    $('.category-image').hover(
    function () {
        $(this).children('.button-collection').appendTo('#ball').show('fast');
    }, 
    function () {
        $('#ball').children('.button-collection').appendTo(this).hide();
    });

    $('.collection').hover(
    function () {
        $(this).children('.button-collection').appendTo('#ball').show('fast');
    }, 
    function () {
        $('#ball').children('.button-collection').appendTo(this).hide();
    });

    
    

    $(window).on('resize scroll', function() {
      $('.button-music-div').each(function() {
        if ($(this).isInViewport()) { 
            var audio = $(this).children('audio')[0];
            var audioTag = $(this).children('audio');
            var played = $(this).children('audio').data('played');
            console.log(played);
            if(played == 1){
              var playPromise = audio.play();
              audioTag.data('played', '2');
              var result = audioTag.data('played');
              console.log(result);
              
                if (playPromise !== undefined) {
                  playPromise.then(_ => {
                    // Automatic playback started!
                    // Show playing UI.
                    audio.prop('volume', 0.2);
                    audio.play();
                    
                  })
                  .catch(error => {
                    // Auto-play was prevented
                    // Show paused UI.
                    
                  });
                } 
            } 
        } else {
            $(this).children('audio')[0].pause();
            $(this).children('audio')[0].currentTime = 0;
            $(this).children('audio').data('played', '1');
                     
        }
      });


      $('video').each(function() {
        if ($(this).isInViewport()) { 
            var playPromise = $(this).get(0).play();
              if (playPromise !== undefined) {
                playPromise.then(_ => {
                  // Automatic playback started!
                  // Show playing UI.
                  $(this).get(0).prop('volume', 0.2);
                  $(this).get(0).play();
                })
                .catch(error => {
                  // Auto-play was prevented
                  // Show paused UI.
                  
                });
              }
        } else {
           $(this).get(0).pause(); 
        }
      });

      


    });

   

    $('.button-music-div').each(function() {
        if ($(this).isInViewport()) { 
            var audio = $(this).children('audio')[0];
            var playPromise = audio.play();
              if (playPromise !== undefined) {
                playPromise.then(_ => {
                  // Automatic playback started!
                  // Show playing UI.
                  audio.play();
                })
                .catch(error => {
                  // Auto-play was prevented
                  // Show paused UI.
                  
                });
              }
        } else {
           $(this).children('audio')[0].pause(); 
        }
      });

    


    var playing = false;
    var audioElm = $('.background-audio').get(0);
    $(window).scroll(function() {
      var pageScroll = $(window).scrollTop();
      if(!playing && pageScroll > 500 && pageScroll < 3000){

        audioElm.play();
        $('.background-audio').prop('volume', 0.2);
        playing = true;
      }else if(pageScroll < 500){
        audioElm.pause();
        playing = false;
      }
    });


});





