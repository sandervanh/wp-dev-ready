<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<div>
		<?php the_content(); ?>
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
