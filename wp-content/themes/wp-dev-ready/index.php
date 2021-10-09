<?php get_header(); ?>

<main id="" class="">

	<?php if (have_posts()) : ?>

		<header class="page-header">
			<h1><?php the_title(); ?></h1>
		</header>

	<?php while (have_posts()) :
			the_post();
			/*
			* Get the post-type specific archive template
			*/
			get_template_part('archive', get_post_type());

		endwhile;

	else :

		get_template_part('/components/empty');

	endif; ?>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
