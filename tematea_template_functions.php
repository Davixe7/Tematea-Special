<?php 
	
	function before_index_loop(){
		echo '<div class="row">';
	}
	add_action('before_index_loop', 'before_index_loop');
	
	function after_index_loop(){
		echo '</div>';
	}
	add_action('after_index_loop', 'after_index_loop');
	
	function before_main_content_loop(){
		echo '<div class="container" id="wrap">
				<div class="row">
					<div id="main" class="col-md-8 col-md-offset-2 text-center">';
	}
	add_action('before_main_content_loop', 'before_main_content_loop');

	function after_main_content_loop(){
		echo '		</div>
				</div>
				<div class="row"><div class="ribbon"></div></div>
			  </div>';
	}
	add_action('after_main_content_loop', 'after_main_content_loop');

?>