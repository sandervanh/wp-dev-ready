<?php get_header(); ?>

<main id="" class="">

	<?php if (have_posts()) : ?>

		<header class="">
			<h1><?php printf( esc_html__( 'Search Results for: %s', 'wp-dev-ready' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

	<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			get_template_part('components/content', 'search');

		endwhile;

		the_posts_navigation();

	else :

		get_template_part('components/content', 'empty');

	endif;
	?>

</main>

<?php
get_sidebar();
get_footer();
