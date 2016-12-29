<?php get_header() ?>
	
	<?php do_action('before_main_content_loop'); ?>
	<?php if( have_posts() ) : while(have_posts()) : the_post(); ?>
			<?php get_template_part( 'single', 'content' ); ?>
		<?php endwhile; endif; ?>
	<?php do_action('after_main_content_loop'); ?>

<?php get_footer() ?>