<?php get_header(); ?>

<?php get_template_part('/components/layout/wrapper-start'); ?>

	<?php while (have_posts()) :
		the_post();

		get_template_part('components/content', 'page');

	endwhile; ?>

<?php get_template_part('/components/layout/wrapper-end'); ?>

<?php get_footer();
