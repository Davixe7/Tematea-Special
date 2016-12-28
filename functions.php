<?php 

	function tematea_register_styles(){
		wp_register_style('tematea_style', get_stylesheet_uri(), '', '1.0', 'all');
		wp_enqueue_style('tematea_style');
	}
	add_action('wp_enqueue_scripts', 'tematea_register_styles');
?>