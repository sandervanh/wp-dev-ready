<?php get_header(); ?>

	<main id="" class="">

		<?php while ( have_posts() ) :
			the_post();

			get_template_part( 'components/content', 'page' );

		endwhile; ?>

	</main>

<?php get_footer();
