<?php
/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 900;

function createnwjobs_setup() {
	/*
	 * Makes Simple fluid available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Simple Fluid, use a find and replace
	 * to change 'createnwjobs' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'createnwjobs', get_template_directory() . '/languages' );
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	//add_theme_support('nav-menu');
	register_nav_menu( 'primary', __( 'Primary Menu', 'createnwjobs' ) );
        register_nav_menu( 'secondary', __( 'Secondary Menu', 'createnwjobs' ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => '', 'default-image' => '', 'wp-head-callback' => '_custom_background_cb', 'admin-head-callback' => '', 'admin-preview-callback' => ''
	));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'createnwjobs_setup' );

function createnwjobs_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Right Widget', 'createnwjobs' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages', 'createnwjobs' ),
		'before_widget' => '<div class="block block-page">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
        register_sidebar( array(
		'name' => __( 'Right Front Widget', 'createnwjobs' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on right front page', 'createnwjobs' ),
		'before_widget' => '<div class="block">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Left Front Widget', 'createnwjobs' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears on left front page', 'createnwjobs' ),
		'before_widget' => '<div class="main-widget1">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'createnwjobs_widgets_init' );

/**
 * Removes div from wp_page_menu() and replace with ul.
*/
function responsive_wp_page_menu ($page_markup) {
    preg_match('/^<div class=\"([a-z0-9-_]+)\">/i', $page_markup, $matches);
        $divclass = $matches[1];
        $replace = array('<div class="'.$divclass.'">', '</div>');
        $new_markup = str_replace($replace, '', $page_markup);
        $new_markup = preg_replace('/^<ul>/i', '<ul class="'.$divclass.'">', $new_markup);
        return $new_markup; }

add_filter('wp_page_menu', 'responsive_wp_page_menu');

/**
 * Replace various active menu class names with "active" or nothing
 *
 */
function roots_wp_nav_menu($text) {
  $replace = array(
    'sub-menu'     => '',
	'menu-item'  => '',
	'menu-item-type-post_type'  => '',
	'menu-item-object-page'  => '',
	'menu-item-13'  => '',
	'menu-item-type-custom' => '',
	'menu-item-object-custom' => '',
	'current-menu-item'=> '',
	'current_page_item' => '',
	'menu-item-home menu-item-11'=> ''
  );

  $text = str_replace(array_keys($replace), $replace, $text);
  return $text;
}
add_filter('wp_nav_menu', 'roots_wp_nav_menu');
