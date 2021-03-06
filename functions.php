<?php
/**
 * Strapped functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Strapped
 */

//ACF


// if( function_exists('acf_add_options_page') ) {

// 	acf_add_options_page('Title');
// 	acf_add_options_sub_page('Header');
// 	acf_add_options_sub_page('Footer');
// 	acf_add_options_sub_page('Accommodation');


// $acf_add_options_page = (array(
// 	'page_title' => 'Title',
// 	'menu_title' => 'Title',
// 	'menu_slug' => 'theme-options',
// 	'capability' => 'edit_posts',
// 	'position' => false,
// 	'parent_slug' => '',
// 	'icon_url' => false,
// 	'redirect' => false
// 	));

// $acf_add_options_sub_page = (array(
// 	'page_title' => 'Header',
// 	'menu_title' => 'Header',
// 	'menu_slug' => 'theme-options-header',
// 	'capability' => 'edit_posts',
// 	'position' => false,
// 	'parent_slug' => 'theme-options',
// 	'icon_url' => false,
// 	'redirect' => false,
// ));

// $acf_add_options_sub_page = (array(
// 	'page_title' => 'Footer',
// 	'menu_title' => 'Footer',
// 	'menu_slug' => 'theme-options-footer',
// 	'capability' => 'edit_posts',
// 	'position' => false,
// 	'parent_slug' => 'theme-options',
// 	'icon_url' => false,
// 	'redirect' => false,
// ));

// $acf_add_options_sub_page = (array(
// 	'page_title' => 'Accommodation',
// 	'menu_title' => 'Accommodation',
// 	'menu_slug' => 'theme-options-accommodation',
// 	'capability' => 'edit_posts',
// 	'position' => false,
// 	'parent_slug' => 'theme-options',
// 	'icon_url' => false,
// 	'redirect' => false,
// ));
// }


if (function_exists('acf_add_options_page')) {
  //Create the parent.
  $parent = acf_add_options_page(array(
    'page_title'  => 'Content',
    'menu_title'  => 'Content',
    'redirect'    => false
  ));

  //Create the children.
  acf_add_options_sub_page(array(
    'page_title'  => 'Header',
    'menu_title'  => 'Header',
    'parent_slug' => $parent['menu_slug'],
    'capability' => 'edit_posts',
    'redirect' => false
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title'  => 'Footer',
    'parent_slug' => $parent['menu_slug'],
    'capability' => 'edit_posts',
    'redirect' => false
  ));
  acf_add_options_sub_page(array(
    'page_title'  => 'Accommodation',
    'menu_title'  => 'Accommodation',
    'parent_slug' => $parent['menu_slug'],
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}



if ( ! function_exists( 'strapped_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function strapped_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Strapped, use a find and replace
	 * to change 'strapped' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'strapped', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom logo.
	add_theme_support( 'custom-logo' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'strapped' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'strapped_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'strapped_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function strapped_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'strapped_content_width', 640 );
}
add_action( 'after_setup_theme', 'strapped_content_width', 0 );

if ( !function_exists( 'strapped_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function strapped_the_custom_logo() {
    // Try to retrieve the Custom Logo
    $output = '';
    if (function_exists('get_custom_logo'))
        $output = get_custom_logo();

    // Nothing in the output: Custom Logo is not supported, or there is no selected logo
    // In both cases we display the site's name
    if (empty($output))
        $output = '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';

    echo $output;
}
endif;

/**
 * Implement scripts.
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Implement scripts.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Implement the Custom Header feature.

require get_template_directory() . '/inc/custom-header.php';
 */
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/**
 * Meta Boxes.
 */
require get_template_directory() . '/inc/meta-box.php';

/**
 * Bootstrap Walker Menu
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Custom post types
 */
require get_template_directory() . '/inc/post-types/CPT.php';
require get_template_directory() . '/inc/post-types/register-section.php';
// require get_template_directory() . '/inc/post-types/register-portfolio.php';

if ( !function_exists( 'strapped_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function strapped_the_custom_logo() {
    // Try to retrieve the Custom Logo
    $output = '';
    if (function_exists('get_custom_logo'))
        $output = get_custom_logo();

    // Nothing in the output: Custom Logo is not supported, or there is no selected logo
    // In both cases we display the site's name
    if (empty($output))
        $output = '<a class="navbar-brand" href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';

    echo $output;
}
endif;
