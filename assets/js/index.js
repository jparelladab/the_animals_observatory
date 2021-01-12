


jQuery(document).ready(function ($) {



    $.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();

      var viewportTop = $(window).scrollTop() + 60;
      var viewportBottom = viewportTop + $(window).height();

      return elementBottom > viewportTop && elementTop < viewportBottom;
    };





    //LOADER


    $(window).on('load', function() {



        $('.welcome-div').css('opacity', '1');


    });

    $(document).on('click', '#button-inside', function(){
        $('.loader').fadeOut();

        // $('#ball').css('opacity', '1');
        // $('.video_div').children('video').prop('muted', false);
        // $('.video_div').children('video').get(0).play();
        // $('.lg-row-bg-video').children('video').get(0).play();
        // $(document).scrollTop(0);
        // setTimeout(function() {
        //     var rellax = new Rellax('.rellax', {
        //           wrapper:'.gryd-type'
        //         });
        // }, 300);

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




});



//Flickity JS
//   Variables
//
//////////////////////////////////////////////////////////////////////

// Play with this value to change the speed
let tickerSpeed = 1;

let flickity = null;
let isPaused = false;
const slideshowEl = document.querySelector('.main-carousel');


//
//   Functions
//
//////////////////////////////////////////////////////////////////////

const update = () => {
  if (isPaused) return;
  if (flickity.slides) {
    flickity.x = (flickity.x - tickerSpeed) % flickity.slideableWidth;
    flickity.selectedIndex = flickity.dragEndRestingSelect();
    flickity.updateSelectedSlide();
    flickity.settle(flickity.x);
  }
  window.requestAnimationFrame(update);
};

const pause = () => {
  isPaused = true;
};

const play = () => {
  if (isPaused) {
    isPaused = false;
    window.requestAnimationFrame(update);
  }
};


//
//   Create Flickity
//
//////////////////////////////////////////////////////////////////////

flickity = new Flickity(slideshowEl, {
  autoPlay: false,
  prevNextButtons: true,
  pageDots: false,
  draggable: false,
  wrapAround: true,
  selectedAttraction: 0.015,
  friction: 0.25,
  groupCells: 1
});
flickity.x = 0;


//
//   Add Event Listeners
//
//////////////////////////////////////////////////////////////////////

slideshowEl.addEventListener('mouseenter', pause, false);
slideshowEl.addEventListener('focusin', pause, false);
slideshowEl.addEventListener('mouseleave', play, false);
slideshowEl.addEventListener('focusout', play, false);

flickity.on('dragStart', () => {
  isPaused = true;

});


//
//   Start Ticker
//
//////////////////////////////////////////////////////////////////////

update();

