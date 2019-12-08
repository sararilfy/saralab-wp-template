<?php
/**
 * saralab Theme functions
 *
 * @since 1.0.0
 */

/**
 * Sets up theme.
 *
 * @since 1.0.0
 */
function saralab_setup() {

	/**
	 * Add support for <title> tag.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support Eye catch.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Add post-feed, comment-feed.
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
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
			'caption'
		)
	);

	/**
	 * Custom Header Support
	 * @see: https://codex.wordpress.org/Custom_Headers
	 */
	$args = array(
			'default-image'          => '',
			'random-default'         => true,
			'width'                  => 0,
			'height'                 => 0,
			'flex-height'            => true,
			'flex-width'             => true,
			'default-text-color'     => '',
			'header-text'            => true,
			'uploads'                => true,
			'video'                  => true,
			'wp-head-callback'       => '__return_false',
			'admin-head-callback'    => '__return_false',
			'admin-preview-callback' => '__return_false'
	);
	add_theme_support( 'custom-header', $args );

	/**
	 * Custom Background Support
	 * @see: https://codex.wordpress.org/Custom_Backgrounds
	 */
	$args = array(
			'default-color'          => 'ffffff',
			'default-image'          => '',
			'default-repeat'         => '',
			'default-position-x'     => '',
			'default-attachment'     => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '__return_false',
			'admin-preview-callback' => '__return_false'
	);
	add_theme_support( 'custom-background', $args );

	/**
	 * Add support for Custom logo.
	 * @see https://codex.wordpress.org/Theme_Logo
	 */
//	add_theme_support(
//		'custom-logo',
//		array(
//			'height'      => 600,
//			'width'       => 600,
//			'flex-width'  => true,
//			'flex-height' => true,
//		)
//	);

	saralab_remove_action_head();
}
add_action( 'after_setup_theme', 'saralab_setup' );


/**
 * Set the content width.
 *
 * @link https://codex.wordpress.org/Content_Width
 * @since 1.0.0
 */

if ( ! isset( $content_width ) ) {
	$content_width = 768;
}


/**
 * wp_head() remove
 *
 * @since 1.0.0
 */
function saralab_remove_action_head() {
	// Remove WordPress version information.
	remove_action( 'wp_head', 'wp_generator' );
	// Remove wlwmanifest address.（ Windows Live Writer for WordPress ）
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove EditURI address.
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Short Link
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	// Remove emoji DNS prefetch.
	add_filter( 'emoji_svg_url', '__return_false' );
	// Remove emoji script and style remove.
	remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles',     'print_emoji_styles' );
	remove_action( 'admin_print_styles',  'print_emoji_styles' );
}


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @since 1.0.0
 */
function saralab_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'サイドバー',
			'id'            => 'archive-sidebar',
			'description'   => '',
			'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title-widget">',
			'after_title'   => '</h3>'
		)
	);

}
add_action( 'widgets_init', 'saralab_widgets_init' );


/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function saralab_scripts   () {
	$version = wp_get_theme()->get( 'Version' );
	wp_dequeue_style( 'wp-block-library' );
	wp_enqueue_style( 'saralab-style', get_stylesheet_uri(), array(), $version );
}
add_action( 'wp_enqueue_scripts', 'saralab_scripts' );