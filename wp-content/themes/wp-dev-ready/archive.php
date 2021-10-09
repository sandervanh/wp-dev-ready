<?php get_header(); ?>

	<main id="" class="">

		<?php if ( have_posts() ) : ?>

			<header class="">
				<?php
				the_archive_title( '<h1>', '</h1>' );
				the_archive_description( '<div>', '</div>' );
				?>
			</header>

			<?php while ( have_posts() ) :
				the_post();

				get_template_part( 'components/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'components/content', 'empty' );

		endif;
		?>

	</main>

<?php
get_sidebar();
get_footer();
