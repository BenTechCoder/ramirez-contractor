<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="hero" data-hero="grid-background">
		<div class="hero__content wrapper stack center py-l-xl text-center text-dark">
			<?php the_title('<h1 class="hero__title">', '</h1>'); ?>
			<?php
			if (the_excerpt()) {
				the_excerpt();
			}
			?>
			<div class="center flex gap-2">
				<?php
				if (is_page('About')) {
					echo '<a href="/contact/" class="btn bg-primary text-light">Contact</a>';
				} else {
					echo '<a href="/about/" class="btn bg-primary text-light">About</a>';
				}


				?>

				<a href="/services/" class="btn bg-dark text-light">See all Services</a>
			</div>
		</div>
		<?php the_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="wrapper prose my-l-xl">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-${ID} -->

<?php
if (!is_page('contact')) {
	get_template_part('/template-parts/components/services-grid');
} ?>