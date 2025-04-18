<?php

/**
 * Ramirez Contractor LLC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ramirez_Contractor_LLC
 */

if (! defined('RAMIREZ_CONTRACTOR_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('RAMIREZ_CONTRACTOR_VERSION', '0.1.0');
}

if (! defined('RAMIREZ_CONTRACTOR_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `ramirez_contractor_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'RAMIREZ_CONTRACTOR_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary stack'
	);
}

if (! function_exists('ramirez_contractor_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ramirez_contractor_setup()
	{

		remove_theme_support('core-block-patterns');
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Ramirez Contractor LLC, use a find and replace
		 * to change 'ramirez-contractor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('ramirez-contractor', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'Eyebrow' => __('Eyebrow Menu', 'ramirez-contractor'),
				'Primary' => __('Primary', 'ramirez-contractor'),
				'Footer' => __('Footer Menu', 'ramirez-contractor'),
			)
		);

		add_filter('should_load_remote_block_patterns', '__return_false');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Add excerpts to all page post types
		add_post_type_support('page', 'excerpt');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');

		// Add support for custom logos
		add_theme_support('custom-logo');
	}
endif;
add_action('after_setup_theme', 'ramirez_contractor_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ramirez_contractor_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Footer', 'ramirez-contractor'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', 'ramirez-contractor'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'ramirez_contractor_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function ramirez_contractor_scripts()
{
	wp_enqueue_style('ramirez-contractor-style', get_stylesheet_uri(), array(), RAMIREZ_CONTRACTOR_VERSION);
	wp_enqueue_script('ramirez-contractor-script', get_template_directory_uri() . '/js/script.min.js', array(), RAMIREZ_CONTRACTOR_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'ramirez_contractor_scripts');

/**
 * Enqueue the block editor script.
 */
function ramirez_contractor_enqueue_block_editor_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'ramirez-contractor-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			RAMIREZ_CONTRACTOR_VERSION,
			true
		);
		wp_add_inline_script('ramirez-contractor-editor', "tailwindTypographyClasses = '" . esc_attr(RAMIREZ_CONTRACTOR_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'ramirez_contractor_enqueue_block_editor_script');

add_action('admin_init', function () {
	// Redirect any user trying to access comments page
	global $pagenow;

	if ($pagenow === 'edit-comments.php') {
		wp_safe_redirect(admin_url());
		exit;
	}

	// Remove comments metabox from dashboard
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

	// Disable support for comments and trackbacks in post types
	foreach (get_post_types() as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
	remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
});

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function ramirez_contractor_tinymce_add_class($settings)
{
	$settings['body_class'] = RAMIREZ_CONTRACTOR_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'ramirez_contractor_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

function ramirez_contractor_customize_register($wp_customize)
{
	// Add customizer settings and controls here
	$wp_customize->add_section('testimonial_section', array(
		'title'      => 'Site Settings',
		'priority'   => 20,
	));

	$wp_customize->add_setting('testimonial_section_display', array(
		'default'     => true,
		'transport'   => 'refresh',
	));

	$wp_customize->add_control('site_section_display', array(
		'label' => 'Testimonials enabled',
		'section' => 'testimonial_section',
		'settings' => 'testimonial_section_display',
		'default' => 'Hide',
		'type' => 'radio',
		'choices' => array(
			'show' => 'Show',
			'hide' => 'Hide',
		),
	));
}

add_action('customize_register', 'ramirez_contractor_customize_register');

add_filter('wpcf7_autop_or_not', '__return_false');
