<?php get_header() ?>
	
<div class="container" id="wrap">
	<div class="row">
		<div id="main" class="col-md-8 col-md-offset-2 text-center">
			<?php if( have_posts() ) : while(have_posts()) : the_post(); ?>
					<article>
						<h3><?php the_title() ?></h3>
						<hr>
						<p> <?php the_content() ?> </p>
					</article>
				<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="ribbon"></div>
	</div>
</div>

<?php get_footer() ?>