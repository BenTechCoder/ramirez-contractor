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

	<header class="entry-header">
		<?php
		if ( ! is_front_page() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php ramirez_contractor_post_thumbnail(); ?>

	<div <?php ramirez_contractor_content_class( 'entry-content' ); ?>>
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->

	

</article><!-- #post-<?php the_ID(); ?> -->
