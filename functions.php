<?php
function load_fonts() {
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Yellowtail');
	wp_enqueue_style( 'googleFonts');
	}
add_filter( 'widget_text', 'do_shortcode');
?>
