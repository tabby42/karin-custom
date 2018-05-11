jQuery(document).ready(function ($) {
	var mySwiper = new Swiper ('.swiper-container', {
	  // Optional parameters
	  //direction: 'vertical',
	  slidesPerView: 'auto',
      centeredSlides: true,
      spaceBetween: 20,
	  loop: true,
	  grabCursor: true,
	  autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
	  // pagination: {
	  //   el: '.swiper-pagination',
	  //   clickable: true
	  // }
	});
});