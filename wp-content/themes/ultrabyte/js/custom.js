/* $('.slider').slick({
    draggable: true,
    fade: true,
    speed: 900,
    infinite: true,
    touchThreshold: 100,
    accessibility: true,
    autoplay:true,
    autoplaySpeed: 4000,
    arrows:true,
    dots:false
}); */



  
var button = document.getElementById('hamburger-menu'),
    span = button.getElementsByTagName('span')[0];

button.onclick = function () {
    span.classList.toggle('hamburger-menu-button-close');
};

$('#hamburger-menu').on('click', toggleOnClass);

function toggleOnClass(event) {
    var toggleElementId = '#' + $(this).data('toggle'),
        element = $(toggleElementId);

    element.toggleClass('on');

}

// close hamburger menu after click a
$('.menu li a').on("click", function () {
    $('#hamburger-menu').click();
});
// close hamburger menu after press esc
var elem = "#ham-navigation"; 
$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
        $( elem ).hide();
        $('.ham-menu').removeClass('on');
        
    }
});
$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) { // ESC
         span.classList.toggle('hamburger-menu-button-close');
    }
});
$('#hamburger-menu').on('click',() => {
    $('#ham-navigation').show();
  });
//slick slider
$(document).ready(function () {
    var time = 4;
    var $bar,
        $slick,
        isPause,
        tick,
        percentTime;

    $slick = $('.slider');
    $slick.slick({
        draggable: true,
        fade: true,
        infinite: true,
        touchThreshold: 100,
        accessibility: true,
        autoplay: true,
        autoplaySpeed: 10000,
        arrows: true,
        dots: false
    });

    $bar = $('.slider-progress .progress');

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 30);
    }

    function interval() {
        if (isPause === false) {
            percentTime += 1 / (time + 0.1);
            $bar.css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $slick.slick('slickNext');
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $bar.css({
            width: 0 + '%'
        });
        clearTimeout(tick);
    }

    startProgressbar();

    $('.slick-next, .slick-prev').click(function () {
        startProgressbar();
    });

});
// carousel project


//slider counter

$('.owl-project').on('initialized.owl.carousel changed.owl.carousel', function (e) {
    if (!e.namespace) {
        return;
    }
    var carousel = e.relatedTarget;
    $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
}).owlCarousel({
    slideTransition: 'linear',
    loop: true,
    margin: 30,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});
//owl testimonial
$('.owl-testimonial').owlCarousel({
    loop: true,
    dots: false,
    nav: true,
    animateOut: 'fadeOut',
    animateIn: 'flipInX',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
//client slider
var owl = $('.owl-client');
owl.owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    animateOut: 'fadeOut',
    slideBy: 4,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
/* page loder js */
$(window).on('load', function () {
    $(".loader").fadeOut("slow");
});
// init controller
// var controller = new ScrollMagic.Controller();

// $('.fade-in').each(function () {

//     var tween = TweenMax.from($(this), 0.1, {autoAlpha: 0, scale: 0.5, y: '+=30', ease: Linear.easeNone});

//     var scene = new ScrollMagic.Scene({
//         triggerElement: this
//     })
//         .setTween(tween) 
//         .addTo(controller);

// });

// $('.scale-in').each(function () {

//     var tween = TweenMax.from($(this), 0.1, {autoAlpha: 0, scale: 0.5, delay: 1, x: '300', ease: Power4.easeOut});

//     var scene = new ScrollMagic.Scene({
//         triggerElement: this
//     })
//         .setTween(tween) 
//         .addTo(controller);

// });
// $('.fade-up').each(function () {

//     var tween = TweenMax.from($(this), 0.1, {autoAlpha: 0, scale: 0.5, y: '-10', ease: Power4.easeOut});

//     var scene = new ScrollMagic.Scene({
//         triggerElement: this
//     })
//         .setTween(tween) 
//         .addTo(controller);

// });
//modal for video

// When the user clicks the button, open the modal
$(".modal-trigger").click(function (event) {
   event.preventDefault()
   $(".custom-modal").show();
   $(".video-player-modal > iframe").css({"display":"block"});

});
$(".modal-close-box").click(function(){
   $(".custom-modal").css({"display":"none"});
   $(".video-player-modal iframe").attr("src", $(".video-player-modal iframe").attr("src"));
   // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
});
//editted part
$('#hamburger-menu').on('click',() => {
    $('.scroll-frame-phone').hide();
  });
 $('.page-colored-in project-responsive').on('mouseenter', () => {
    $('.scroll-frame-phone').show()
  });

