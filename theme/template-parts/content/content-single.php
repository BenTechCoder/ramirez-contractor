<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="hero bg-dark" data-hero="grid-background">
		<div class="hero__content wrapper stack center py-l-xl text-center text-light">
			<?php the_title('<h1 class="hero__title">', '</h1>'); ?>
			<?php
			if (has_excerpt()) {
				the_excerpt();
			}
			?>
			<div class="center flex gap-2">
				<a href="/contact" class="btn bg-primary text-light">Contact</a>
				<a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="btn bg-light text-dark">See all <?php echo get_post_type(); ?></a>
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