<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<footer id="colophon" class="footer py-xl-2xl bg-dark text-light">
	<div class="footer__inner center stack">
			<?php get_template_part('template-parts/assets/logo') ?>
		<?php if (has_nav_menu('Footer')) : ?>
			<nav aria-label="<?php esc_attr_e('Footer Menu', 'ramirez-contractor'); ?>" class="nav center">
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
		<p class="center">Website by <a href="https://www.lebronconsulting.tech/" class="">Lebron Consulting</a></p>

		<!-- 
	</div>
	</section>

</footer><!-- #colophon -->