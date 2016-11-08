<?php
/**
 * Strapped functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Strapped
 */

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
meta box
**/


/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 *
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'dwp_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function dwp_register_meta_boxes( $meta_boxes ) {
    /**
     * prefix of meta keys (optional)
     * Use underscore (_) at the beginning to make keys hidden
     * Alt.: You also can make prefix empty to disable it
     */
    // Better has an underscore as last sign
    $prefix = 'trevyrbarn_';

    

    // MY META BOX


    // EXAMPLE ONE
    $meta_boxes[] = array(
        // Meta box id, UNIQUE per meta box. Optional since 4.1.5
        'id'         => 'banner',

        // Meta box title - Will appear at the drag and drop handle bar. Required.
        'title'      => esc_html__( 'Title banner', 'meta-box' ),

        // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
        'post_types' => array( 'post', 'page', 'portfolio' ),

        // Where the meta box appear: normal (default), advanced, side. Optional.
        'context'    => 'normal',

        // Order of meta box: high (default), low. Optional.
        'priority'   => 'high',

        // Auto save: true, false (default). Optional.
        'autosave'   => true,

        // List of meta fields
        'fields'     => array(
            // TEXTAREA
            array(
                'name' => esc_html__( 'Strapline Text', 'meta-box' ),
                'desc' => esc_html__( 'This is for the strapline in the header', 'meta-box' ),
                'id'   => "{$prefix}strap_text",
                'type' => 'textarea',
                'cols' => 20,
                'rows' => 3,
            ),
                        // IMAGE ADVANCED (WP 3.5+)
            array(
                'name'             => esc_html__( 'Banner Background Image', 'meta-box' ),
                'id'               => "{$prefix}banner_image",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
        ),
    );

    // PORTFOLIO

    $meta_boxes[] = array(
        // Meta box id, UNIQUE per meta box. Optional since 4.1.5
        'id'         => 'details',

        // Meta box title - Will appear at the drag and drop handle bar. Required.
        'title'      => esc_html__( 'Details', 'meta-box' ),

        // Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
        'post_types' => array( 'portfolio' ),

        // Where the meta box appear: normal (default), advanced, side. Optional.
        'context'    => 'normal',

        // Order of meta box: high (default), low. Optional.
        'priority'   => 'high',

        // Auto save: true, false (default). Optional.
        'autosave'   => true,

        // List of meta fields
        'fields'     => array(
            // TEXTAREA
            array(
                'name' => esc_html__( 'Banner Text', 'meta-box' ),
                'desc' => esc_html__( 'This is text for next to main content', 'meta-box' ),
                'id'   => "{$prefix}side_details",
                'type' => 'textarea',
                'cols' => 20,
                'rows' => 3,
            ),
                        // IMAGE ADVANCED (WP 3.5+)
            array(
                'name'             => esc_html__( 'slider images', 'meta-box' ),
                'id'               => "{$prefix}sliders_image",
                'type'             => 'image_advanced',
                'max_file_uploads' => 10,
            ),
        ),
    );

    // 2nd meta box
    $meta_boxes[] = array(
        'title' => esc_html__( 'Advanced Fields', 'your-prefix' ),

        'fields' => array(
            // HEADING
            array(
                'type' => 'heading',
                'name' => esc_html__( 'Heading', 'your-prefix' ),
                'desc' => esc_html__( 'Optional description for this heading', 'your-prefix' ),
            ),
            // SLIDER
            array(
                'name'       => esc_html__( 'Slider', 'your-prefix' ),
                'id'         => "{$prefix}slider",
                'type'       => 'slider',

                // Text labels displayed before and after value
                'prefix'     => esc_html__( '$', 'your-prefix' ),
                'suffix'     => esc_html__( ' USD', 'your-prefix' ),

                // jQuery UI slider options. See here http://api.jqueryui.com/slider/
                'js_options' => array(
                    'min'  => 10,
                    'max'  => 255,
                    'step' => 5,
                ),

                // Default value
                'std'       => 155,
            ),
            // NUMBER
            array(
                'name' => esc_html__( 'Number', 'your-prefix' ),
                'id'   => "{$prefix}number",
                'type' => 'number',

                'min'  => 0,
                'step' => 5,
            ),
            // DATE
            array(
                'name'       => esc_html__( 'Date picker', 'your-prefix' ),
                'id'         => "{$prefix}date",
                'type'       => 'date',

                // jQuery date picker options. See here http://api.jqueryui.com/datepicker
                'js_options' => array(
                    'appendText'      => esc_html__( '(yyyy-mm-dd)', 'your-prefix' ),
                    'dateFormat'      => esc_html__( 'yy-mm-dd', 'your-prefix' ),
                    'changeMonth'     => true,
                    'changeYear'      => true,
                    'showButtonPanel' => true,
                ),
            ),
            // DATETIME
            array(
                'name'       => esc_html__( 'Datetime picker', 'your-prefix' ),
                'id'         => $prefix . 'datetime',
                'type'       => 'datetime',

                // jQuery datetime picker options.
                // For date options, see here http://api.jqueryui.com/datepicker
                // For time options, see here http://trentrichardson.com/examples/timepicker/
                'js_options' => array(
                    'stepMinute'     => 15,
                    'showTimepicker' => true,
                ),
            ),
            // TIME
            array(
                'name'       => esc_html__( 'Time picker', 'your-prefix' ),
                'id'         => $prefix . 'time',
                'type'       => 'time',

                // jQuery datetime picker options.
                // For date options, see here http://api.jqueryui.com/datepicker
                // For time options, see here http://trentrichardson.com/examples/timepicker/
                'js_options' => array(
                    'stepMinute' => 5,
                    'showSecond' => true,
                    'stepSecond' => 10,
                ),
            ),
            // COLOR
            array(
                'name' => esc_html__( 'Color picker', 'your-prefix' ),
                'id'   => "{$prefix}color",
                'type' => 'color',
            ),
            // CHECKBOX LIST
            array(
                'name'    => esc_html__( 'Checkbox list', 'your-prefix' ),
                'id'      => "{$prefix}checkbox_list",
                'type'    => 'checkbox_list',
                // Options of checkboxes, in format 'value' => 'Label'
                'options' => array(
                    'value1' => esc_html__( 'Label1', 'your-prefix' ),
                    'value2' => esc_html__( 'Label2', 'your-prefix' ),
                ),
            ),
            // AUTOCOMPLETE
            array(
                'name'    => esc_html__( 'Autocomplete', 'your-prefix' ),
                'id'      => "{$prefix}autocomplete",
                'type'    => 'autocomplete',
                // Options of autocomplete, in format 'value' => 'Label'
                'options' => array(
                    'value1' => esc_html__( 'Label1', 'your-prefix' ),
                    'value2' => esc_html__( 'Label2', 'your-prefix' ),
                ),
                // Input size
                'size'    => 30,
                // Clone?
                'clone'   => false,
            ),
            // EMAIL
            array(
                'name' => esc_html__( 'Email', 'your-prefix' ),
                'id'   => "{$prefix}email",
                'desc' => esc_html__( 'Email description', 'your-prefix' ),
                'type' => 'email',
                'std'  => 'name@email.com',
            ),
            // RANGE
            array(
                'name' => esc_html__( 'Range', 'your-prefix' ),
                'id'   => "{$prefix}range",
                'desc' => esc_html__( 'Range description', 'your-prefix' ),
                'type' => 'range',
                'min'  => 0,
                'max'  => 100,
                'step' => 5,
                'std'  => 0,
            ),
            // URL
            array(
                'name' => esc_html__( 'URL', 'your-prefix' ),
                'id'   => "{$prefix}url",
                'desc' => esc_html__( 'URL description', 'your-prefix' ),
                'type' => 'url',
                'std'  => 'http://google.com',
            ),
            // OEMBED
            array(
                'name' => esc_html__( 'oEmbed', 'your-prefix' ),
                'id'   => "{$prefix}oembed",
                'desc' => esc_html__( 'oEmbed description', 'your-prefix' ),
                'type' => 'oembed',
            ),
            // SELECT ADVANCED BOX
            array(
                'name'        => esc_html__( 'Select', 'your-prefix' ),
                'id'          => "{$prefix}select_advanced",
                'type'        => 'select_advanced',
                // Array of 'value' => 'Label' pairs for select box
                'options'     => array(
                    'value1' => esc_html__( 'Label1', 'your-prefix' ),
                    'value2' => esc_html__( 'Label2', 'your-prefix' ),
                ),
                // Select multiple values, optional. Default is false.
                'multiple'    => false,
                // 'std'         => 'value2', // Default value, optional
                'placeholder' => esc_html__( 'Select an Item', 'your-prefix' ),
            ),
            // TAXONOMY
            array(
                'name'       => esc_html__( 'Taxonomy', 'your-prefix' ),
                'id'         => "{$prefix}taxonomy",
                'type'       => 'taxonomy',
                // Taxonomy name
                'taxonomy'   => 'category',
                // How to show taxonomy: 'checkbox_list' (default) or 'checkbox_tree', 'select_tree', select_advanced or 'select'. Optional
                'field_type' => 'checkbox_list',
                // Additional arguments for get_terms() function. Optional
                'query_args' => array(),
            ),
            // POST
            array(
                'name'        => esc_html__( 'Posts (Pages)', 'your-prefix' ),
                'id'          => "{$prefix}pages",
                'type'        => 'post',
                // Post type
                'post_type'   => 'page',
                // Field type, either 'select' or 'select_advanced' (default)
                'field_type'  => 'select_advanced',
                'placeholder' => esc_html__( 'Select an Item', 'your-prefix' ),
                // Query arguments (optional). No settings means get all published posts
                'query_args'  => array(
                    'post_status'    => 'publish',
                    'posts_per_page' => - 1,
                ),
            ),
            // WYSIWYG/RICH TEXT EDITOR
            array(
                'name'    => esc_html__( 'WYSIWYG / Rich Text Editor', 'your-prefix' ),
                'id'      => "{$prefix}wysiwyg",
                'type'    => 'wysiwyg',
                // Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
                'raw'     => false,
                'std'     => esc_html__( 'WYSIWYG default value', 'your-prefix' ),

                // Editor settings, see wp_editor() function: look4wp.com/wp_editor
                'options' => array(
                    'textarea_rows' => 4,
                    'teeny'         => true,
                    'media_buttons' => false,
                ),
            ),
            // DIVIDER
            array(
                'type' => 'divider',
            ),
            // FILE UPLOAD
            array(
                'name' => esc_html__( 'File Upload', 'your-prefix' ),
                'id'   => "{$prefix}file",
                'type' => 'file',
            ),
            // FILE ADVANCED (WP 3.5+)
            array(
                'name'             => esc_html__( 'File Advanced Upload', 'your-prefix' ),
                'id'               => "{$prefix}file_advanced",
                'type'             => 'file_advanced',
                'max_file_uploads' => 4,
                'mime_type'        => 'application,audio,video', // Leave blank for all file types
            ),
            // IMAGE UPLOAD
            array(
                'name' => esc_html__( 'Image Upload', 'your-prefix' ),
                'id'   => "{$prefix}image",
                'type' => 'image',
            ),
            // THICKBOX IMAGE UPLOAD (WP 3.3+)
            array(
                'name' => esc_html__( 'Thickbox Image Upload', 'your-prefix' ),
                'id'   => "{$prefix}thickbox",
                'type' => 'thickbox_image',
            ),
            // PLUPLOAD IMAGE UPLOAD (WP 3.3+)
            array(
                'name'             => esc_html__( 'Plupload Image Upload', 'your-prefix' ),
                'id'               => "{$prefix}plupload",
                'type'             => 'plupload_image',
                'max_file_uploads' => 4,
            ),
            // IMAGE ADVANCED (WP 3.5+)
            array(
                'name'             => esc_html__( 'Image Advanced Upload', 'your-prefix' ),
                'id'               => "{$prefix}imgadv",
                'type'             => 'image_advanced',
                'max_file_uploads' => 4,
            ),
            // BUTTON
            array(
                'id'   => "{$prefix}button",
                'type' => 'button',
                'name' => ' ', // Empty name will "align" the button to all field inputs
            ),
            // TEXT-LIST
            array(
                'name' => esc_html__( 'Text List', 'rwmb' ),
                'id'   => "{$prefix}text_list",
                'type' => 'text_list',
                // Options of inputs, in format 'Placeholder' => 'Label'
                'options' => array(
                     'Placehold1' => esc_html__( 'Label1', 'rwmb' ),
                     'Placehold2' => esc_html__( 'Label2', 'rwmb' ),
                     'Placehold3' => esc_html__( 'Label3', 'rwmb' ),
                ),
            ),

        ),
    );

    return $meta_boxes;
}

/**
 * Bootstrap Walker Menu
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

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
