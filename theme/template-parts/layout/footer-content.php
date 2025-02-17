<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<footer id="colophon" class="footer py-xl-2xl">
	<div class="footer__inner center stack">
		<?php get_template_part('template-parts/assets/logo', null, array(
			'type' => 'alternate'
		)) ?>
		<?php if (has_nav_menu('Footer')) : ?>
			<nav aria-label="<?php esc_attr_e('Footer Menu', 'ramirez-contractor'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'Footer',
						'menu_class'     => 'cluster justify-center',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>

<!-- 
		<?php
		$ramirez_contractor_blog_info = get_bloginfo('name');
		if (! empty($ramirez_contractor_blog_info)) :
		?>
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
		<?php
		endif;

		?> -->
	</div>
	</section>

</footer><!-- #colophon -->