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
		<div class="hero__content wrapper stack center py-xl-2xl text-center <?php echo (has_post_thumbnail() ? 'text-light' : 'text-dark') ?>">
			<?php the_title('<h1 class="hero__title">', '</h1>'); ?>
			<?php
			if (has_excerpt()) {
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
		<?php
		if (has_post_thumbnail()) {
			the_post_thumbnail();
		} ?>
	</header><!-- .entry-header -->

	<div class="wrapper my-l-xl prose <?php echo (is_page('Service Area') ? 'switcher items-center' : '') ?>" data-wrapper="content">
		<?php
		the_content();
		?>

		<?php if (is_page('Service Area')) {
			echo '<iframe src="https://www.google.com/maps/d/embed?mid=18V76QHPQPwTBD-Bd9QJxxQROWe39DfY&hl=en&ehbc=2E312F" height="600" loading="lazy"></iframe>';
		} ?>

	</div><!-- .entry-content -->

</article><!-- #post-${ID} -->

<?php
if (!is_page('contact')) {
	get_template_part('/template-parts/components/services-grid');
} ?>