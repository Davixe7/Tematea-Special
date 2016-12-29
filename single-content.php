<article>
	<h3><?php the_title() ?></h3>
	<hr>
	<p> <?php the_content() ?> </p>
	<?php if ( has_post_thumbnail() ):
			set_post_thumbnail_size( '300', '200', 'false' );
			the_post_thumbnail();
		  endif; ?>
</article>