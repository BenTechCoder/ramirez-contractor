<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

get_header();
?>
<section id="primary" class="pb-xl-2xl">
	<main id="main">

		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content/content', 'page');

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<?php
	$post_id = get_the_ID();
	$cta_value = get_post_meta($post_id, 'cta_type', true);
	get_template_part("template-parts/cta/cta", $cta_value);
	?>
</section><!-- #primary -->

<?php
get_footer();
