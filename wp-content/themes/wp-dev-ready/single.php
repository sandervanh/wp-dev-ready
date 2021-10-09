<?php get_header(); ?>

	<main id="" class="">

		<?php while ( have_posts() ) :
			the_post();

			get_template_part( 'components/content', get_post_type() );

		endwhile; ?>

	</main>

<?php get_footer();
