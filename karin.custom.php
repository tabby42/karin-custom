<?php
/**
* Plugin Name:       Karin Custom Thingies
* Plugin URI:        https://github.com/tabby42/karin-custom
* Description:       Adds slider shortcode and custom post type for events
* Version:           1.0.0
* Author:            tabby42
* Author URI:        http://github.com/tabby42
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       karin-custom
* Domain Path:       /languages
*/

require_once(dirname(__FILE__) . '/files/enqueue-scripts.php');
require_once(dirname(__FILE__) . '/files/swiper-shortcode.php');
require_once(dirname(__FILE__) . '/files/events-cpt.php');
require_once(dirname(__FILE__) . '/extended-cpts-master/extended-cpts.php';
?>