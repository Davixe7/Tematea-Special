<?php 

	include_once('tematea_template_functions.php');

	// Añade soporte para imagenes destacadas
	function thumbnail_support(){
		add_theme_support( 'post-thumbnails' ); 
	}
	add_action( 'after_setup_theme', 'thumbnail_support' );
	
	// Carga la hoja de estilos principal del tema
	function tematea_register_styles(){
		wp_register_style('tematea_style', get_stylesheet_uri(), '', '1.0', 'all');
		wp_enqueue_style('tematea_style');
	}
	add_action('wp_enqueue_scripts', 'tematea_register_styles');
	
	// Obtiene el campo personalizado 'Dificultad' de un artículo
	function get_dificulty(){
		if( is_home() && in_the_loop() ){
			$dificulty = get_post_meta( get_the_id(), 'Dificultad', true );
		}
		if( $dificulty ){
			return $dificulty;
		}else{
			return 'Ninguna';
		}
	}
	
?>