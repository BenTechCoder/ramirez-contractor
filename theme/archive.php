<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

get_header();
?>

<section id="primary">
	<main id="main" class="wrapper py-xl-2xl">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php echo get_post_type('<h1 class="page-title">', '</h1>'); ?>
			</header><!-- .page-header -->
			<section class="grid">

			<?php
			// Start the Loop.
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content/content', 'excerpt');

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			ramirez_contractor_the_posts_navigation();

		else :

			// If no content, include the "No posts found" template.
			get_template_part('template-parts/content/content', 'none');

		endif;
			?>
			</section>
	</main><!-- #main -->
</section><!-- #primary -->
<?php get_template_part("template-parts/cta/cta", 'alt-1'); ?>
<?php
get_footer();
