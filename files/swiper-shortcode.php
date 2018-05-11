<?php
 add_shortcode('ktslider', 'kt_slider');

 function kt_slider($atts, $content = null) {
 	ob_start();
 	extract(shortcode_atts( array(
 		'heading' => 'test',
 		'images' => ''
 	), $atts));
 	$urls = explode(', ', $images);
 	var_dump($urls);
 	?>
    <div class="row slider-row">
        <div class="heading-container">
            <h3 class="text-center"><?php echo $heading; ?></h3>
        </div>
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                foreach ($urls as $url) {
                	echo '<div class="swiper-slide"><img src="' . $url . '" alt="Slider Image"></div>';
                }
                ?>
            </div>
        </div>
        <div class="container text-center">
          <button type="button" class="btn btn-default btn-alt-hover ">noch mehr bilder</button>
        </div>
    </div>
	<?php
 	$res = ob_get_clean();
 	return $res;
 }
?>