<?php
add_action('wp_enqueue_scripts','enq_karin_scripts', 20);

function enq_karin_scripts() {
	wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css', false );
	wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js', true );
    wp_enqueue_script( 'swiper-init-js', plugins_url( '../js/swiperscript.js', __FILE__ ), true);
}
?>