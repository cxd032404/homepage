//首页banner
var swiper = new Swiper('.banner .swiper-container', {
     slidesPerView: 1,
     speed:700,
     paginationClickable: true,
     loop: true
 });


///
var swiper = new Swiper('.loglist .swiper-container', {
     slidesPerView: 'auto',
     pagination: {
       clickable: true,
     },
   });

//
var swiper = new Swiper('.biao .swiper-container', {
     slidesPerView: 'auto',
     spaceBetween: 0,
   });


//
var swiper = new Swiper('.mlas_a .swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 10,
      speed:700,
      nextButton: '.mlas_a .prev',
      prevButton: '.mlas_a  .next',
    });

var swiper = new Swiper('.mlas_b .swiper-container', {
    slidesPerView: 'auto',
      spaceBetween: 10,
      speed:700,
      nextButton: '.mlas_b .prev',
      prevButton: '.mlas_b  .next',
    });
var swiper = new Swiper('.mlas_c .swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 10,
      speed:700,
      nextButton: '.mlas_c .prev',
      prevButton: '.mlas_c  .next',
    });

var swiper = new Swiper('.mlas_d .swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 10,
      speed:700,
      nextButton: '.mlas_d .prev',
      prevButton: '.mlas_d  .next',
    });

$(".menu ").click(function(){
  $(".headnav ").slideToggle(500);
});


//
//wow
var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: true,
    live: true
});
wow.init();
