<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="">
		<?php the_title( sprintf( '<h2 class=""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<div class="">
		<?php the_excerpt(); ?>
	</div>

</article>
<?php the_ID(); ?>
