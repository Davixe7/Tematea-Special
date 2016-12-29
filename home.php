<?php get_header(); ?>

<div class="container" id="wrap">
	<div class="col-md-12">
		<h2>Ultimas entradas</h2>
		<hr style="margin-left: 0px;">
	</div>
	<?php do_action('before_index_loop'); ?>
	<?php if( have_posts() ):while( have_posts() ): the_post(); ?>
			<div class="col-md-6 post-thumbnail">
				<article>
					<img class="thumbnail-marker" src="<?php echo get_stylesheet_directory_uri() . '/img/marker.png'?>" width="25">
					<h3><?php the_title(); ?></h3>
					<div>
						<span><small><?php the_time(); ?> </small></span>
						<span><small> Por: <?php the_author_posts_link()?></small></span>
					</div>
					<?php the_excerpt(); ?>
					<p><small>Dificultad: <?php echo get_dificulty() ?></small></p>
					<a href="<?php the_permalink() ?>">Ver artículo</a>
				</article>
			</div>
	<?php endwhile; endif;?>
	<?php do_action('after_index_loop'); ?>
</div>

<?php get_footer(); ?>