var button=document.getElementById('hamburger-menu'),span=button.getElementsByTagName('span')[0];button.onclick=function(){span.classList.toggle('hamburger-menu-button-close');};$('#hamburger-menu').on('click',toggleOnClass);function toggleOnClass(event){var toggleElementId='#'+$(this).data('toggle'),element=$(toggleElementId);element.toggleClass('on');}
$('.menu li a').on("click",function(){$('#hamburger-menu').click();});var elem="#ham-navigation";$(document).on('keydown',function(e){if(e.keyCode===27){$(elem).hide();$('.ham-menu').removeClass('on');}});$(document).on('keydown',function(e){if(e.keyCode===27){span.classList.toggle('hamburger-menu-button-close');}});$('#hamburger-menu').on('click',()=>{$('#ham-navigation').show();});$(document).ready(function(){var time=4;var $bar,$slick,isPause,tick,percentTime;$slick=$('.slider');$slick.slick({draggable:true,fade:true,infinite:true,touchThreshold:100,accessibility:true,autoplay:true,autoplaySpeed:10000,arrows:true,dots:false});$bar=$('.slider-progress .progress');function startProgressbar(){resetProgressbar();percentTime=0;isPause=false;tick=setInterval(interval,30);}
function interval(){if(isPause===false){percentTime+=1/(time+0.1);$bar.css({width:percentTime+"%"});if(percentTime>=100){$slick.slick('slickNext');startProgressbar();}}}
function resetProgressbar(){$bar.css({width:0+'%'});clearTimeout(tick);}
startProgressbar();$('.slick-next, .slick-prev').click(function(){startProgressbar();});});$('.owl-project').on('initialized.owl.carousel changed.owl.carousel',function(e){if(!e.namespace){return;}
var carousel=e.relatedTarget;$('.slider-counter').text(carousel.relative(carousel.current())+1+'/'+carousel.items().length);}).owlCarousel({slideTransition:'linear',loop:true,margin:30,nav:true,autoplay:true,autoplayHoverPause:true,dots:false,responsive:{0:{items:1},600:{items:2},1000:{items:2}}});$('.owl-testimonial').owlCarousel({loop:true,dots:false,nav:true,animateOut:'fadeOut',animateIn:'flipInX',responsive:{0:{items:1},600:{items:1},1000:{items:1}}});var owl=$('.owl-client');owl.owlCarousel({loop:true,nav:false,dots:false,animateOut:'fadeOut',slideBy:4,autoplay:true,responsive:{0:{items:1},600:{items:3},1000:{items:4}}});$(window).on('load',function(){$(".loader").fadeOut("slow");});$(".modal-trigger").click(function(event){event.preventDefault()
$(".custom-modal").show();$(".video-player-modal > iframe").css({"display":"block"});});$(".modal-close-box").click(function(){$(".custom-modal").css({"display":"none"});$(".video-player-modal iframe").attr("src",$(".video-player-modal iframe").attr("src"));});$('#hamburger-menu').on('click',()=>{$('.scroll-frame-phone').hide();});$('.page-colored-in project-responsive').on('mouseenter',()=>{$('.scroll-frame-phone').show()});