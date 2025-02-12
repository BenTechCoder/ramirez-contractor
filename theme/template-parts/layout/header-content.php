<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ramirez_Contractor_LLC
 */

?>

<header id="masthead" class="bg-primary text-light py-s-m">

	<div class="wrapper">
		<div class="nav__inner">


			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<?php get_template_part('template-parts/svg/logo') ?>
			</a>

			<burger-menu max-width="600">
				<nav id="site-navigation"
					aria-label="<?php esc_attr_e('Main Navigation', 'ramirez-contractor'); ?>"
					class="nav">
					<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'ramirez-contractor'); ?></button> -->
					<?php
					wp_nav_menu(
						array(
							'menu' => 'main-nav',
							'theme_location' => 'menu-1',
							'menu_class' => '',
							'menu_id'        => 'primary-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->

			</burger-menu>
		</div>
	</div>
</header><!-- #masthead -->