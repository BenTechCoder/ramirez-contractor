<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ramirez_Contractor_LLC
 */

get_header();
?>

<section id="primary">

	<div>
		<?php
		/* Start the Loop */
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content/content', 'single');

		// End the loop.
		endwhile;
		?>
	</div>

	<?php get_template_part("template-parts/cta/cta", 'alt-2'); ?>
</section><!-- #primary -->

<?php
get_footer();
