//首页banner
var swiper = new Swiper('.banner .swiper-container', {
     slidesPerView: 1,
     speed:700,
     paginationClickable: true,
     loop: true
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

$(".headnav ul li").hover(function(){
  $(this).children(".qiyenav").slideToggle(500);
});
