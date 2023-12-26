<?php

/**
 * Medilab Custom Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Medilab_Custom_Theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cmit_medilab_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Medilab Custom Theme, use a find and replace
		* to change 'cmit-medilab' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('cmit-medilab', get_template_directory() . '/languages');

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'cmit-medilab'),
		)
	);

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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cmit_medilab_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'cmit_medilab_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cmit_medilab_content_width()
{
	$GLOBALS['content_width'] = apply_filters('cmit_medilab_content_width', 640);
}
add_action('after_setup_theme', 'cmit_medilab_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cmit_medilab_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'cmit-medilab'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'cmit-medilab'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'cmit_medilab_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function cmit_medilab_scripts()
{
	wp_enqueue_style('cmit-medilab-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('cmit-medilab-style', 'rtl', 'replace');

	wp_enqueue_script('cmit-medilab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'cmit_medilab_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Create Header Menu */
register_nav_menus(
	array('primary-menu' => 'Header Menu')
);

/* Create Footer Menu */
register_nav_menus(
	array('secondary' => __('Footer Menu'))
);


/* Create Footer Menu */
register_nav_menus(
	array('third' => __('third Menu'))
);



/*Custom Post type start*/

function cw_post_type_gallery()
{

	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('gallery', 'cmit-medilab'),

		'singular_name' => _x('gallery', 'cmit-medilab'),

		'menu_name' => _x('Gallery', 'cmit-medilab'),

		'name_admin_bar' => _x('Gallery', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New gallery'),

		'new_item' => __('New gallery'),

		'edit_item' => __('Edit gallery'),

		'view_item' => __('View gallery'),

		'all_items' => __('All gallery'),

		'search_items' => __('Search gallery'),

		'not_found' => __('No gallery found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'gallery'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('gallery', $args);


	// Doctor Post Type

	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('doctor', 'cmit-medilab'),

		'singular_name' => _x('doctor', 'cmit-medilab'),

		'menu_name' => _x('Doctor', 'cmit-medilab'),

		'name_admin_bar' => _x('Doctor', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New doctor'),

		'new_item' => __('New doctor'),

		'edit_item' => __('Edit doctor'),

		'view_item' => __('View doctor'),

		'all_items' => __('All doctor'),

		'search_items' => __('Search doctor'),

		'not_found' => __('No doctor found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'doctor'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('doctor', $args);







	// Services Post Type



	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('service', 'cmit-medilab'),

		'singular_name' => _x('service', 'cmit-medilab'),

		'menu_name' => _x('Service', 'cmit-medilab'),

		'name_admin_bar' => _x('Service', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New service'),

		'new_item' => __('New service'),

		'edit_item' => __('Edit service'),

		'view_item' => __('View service'),

		'all_items' => __('All service'),

		'search_items' => __('Search service'),

		'not_found' => __('No service found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'service'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('service', $args);



	// Department Post Type





	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('department', 'cmit-medilab'),

		'singular_name' => _x('department', 'cmit-medilab'),

		'menu_name' => _x('Department', 'cmit-medilab'),

		'name_admin_bar' => _x('Department', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New department'),

		'new_item' => __('New department'),

		'edit_item' => __('Edit department'),

		'view_item' => __('View department'),

		'all_items' => __('All department'),

		'search_items' => __('Search department'),

		'not_found' => __('No department found.'),

		 

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'department'),

		'has_archive' => true,

		'hierarchical' => false,

		// 'show_ui' => true,

		// 'show_in_menu'=>'edit.php?post_type=page',

	

	);

	register_post_type('department', $args);


	// About Post Type





	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('about', 'cmit-medilab'),

		'singular_name' => _x('about', 'cmit-medilab'),

		'menu_name' => _x('About', 'cmit-medilab'),

		'name_admin_bar' => _x('About', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New about'),

		'new_item' => __('New about'),

		'edit_item' => __('Edit about'),

		'view_item' => __('View about'),

		'all_items' => __('All about'),

		'search_items' => __('Search about'),

		'not_found' => __('No about found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'about'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('about', $args);






	// Frequently Asked Post Type





	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('asked', 'cmit-medilab'),

		'singular_name' => _x('asked', 'cmit-medilab'),

		'menu_name' => _x('Asked', 'cmit-medilab'),

		'name_admin_bar' => _x('Asked', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New asked'),

		'new_item' => __('New asked'),

		'edit_item' => __('Edit asked'),

		'view_item' => __('View asked'),

		'all_items' => __('All asked'),

		'search_items' => __('Search asked'),

		'not_found' => __('No asked found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'asked'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('asked', $args);



	// Testimonials Section Post Type





	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('slider', 'cmit-medilab'),

		'singular_name' => _x('slider', 'cmit-medilab'),

		'menu_name' => _x('Slider', 'cmit-medilab'),

		'name_admin_bar' => _x('Slider', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New slider'),

		'new_item' => __('New slider'),

		'edit_item' => __('Edit slider'),

		'view_item' => __('View slider'),

		'all_items' => __('All slider'),

		'search_items' => __('Search slider'),

		'not_found' => __('No slider found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'slider'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('slider', $args);


	// Hero Post Type





	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('hero', 'cmit-medilab'),

		'singular_name' => _x('hero', 'cmit-medilab'),

		'menu_name' => _x('Hero', 'cmit-medilab'),

		'name_admin_bar' => _x('Hero', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New hero'),

		'new_item' => __('New hero'),

		'edit_item' => __('Edit hero'),

		'view_item' => __('View hero'),

		'all_items' => __('All hero'),

		'search_items' => __('Search hero'),

		'not_found' => __('No hero found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'hero'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('hero', $args);



	// why me Post Type





	$supports = array(

		'title', // post title

		'editor', // post content

		'author', // post author

		'thumbnail', // featured images

		'excerpt', // post excerpt

		'custom-fields', // custom fields

		'comments', // post comments

		'revisions', // post revisions

		'post-formats', // post formats

	);

	$labels = array(

		'name' => _x('whyme', 'cmit-medilab'),

		'singular_name' => _x('whyme', 'cmit-medilab'),

		'menu_name' => _x('WhyMe', 'cmit-medilab'),

		'name_admin_bar' => _x('WhyMe', 'cmit-medilab'),

		'add_new' => _x('Add New', 'cmit-medilab'),

		'add_new_item' => __('Add New whyme'),

		'new_item' => __('New whyme'),

		'edit_item' => __('Edit whyme'),

		'view_item' => __('View whyme'),

		'all_items' => __('All whyme'),

		'search_items' => __('Search whyme'),

		'not_found' => __('No whyme found.'),

	);

	$args = array(

		'supports' => $supports,

		'labels' => $labels,

		'public' => true,

		'query_var' => true,

		'rewrite' => array('slug' => 'whyme'),

		'has_archive' => true,

		'hierarchical' => false,

	);

	register_post_type('whyme', $args);







































































}








add_action('init', 'cw_post_type_gallery');

/*Custom Post type end*/



function wporg_register_taxonomy_course()
{
	$labels = array(
		'name'              => _x('Doc_Categories', 'taxonomy general name'),
		'singular_name'     => _x('Doc_Categories', 'taxonomy singular name'),
		'search_items'      => __('Search Doc_Categories'),
		'all_items'         => __('All Doc_Categories'),
		'parent_item'       => __('Parent Doc_Categories'),
		'parent_item_colon' => __('Parent Doc_Categories:'),
		'edit_item'         => __('Edit Doc_Categories'),
		'update_item'       => __('Update Doc_Categories'),
		'add_new_item'      => __('Add New Doc_Categories'),
		'new_item_name'     => __('New Doc_Categories Name'),
		'menu_name'         => __('Doc_Categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'Doc_Categories'],
	);
	register_taxonomy('Doc_Categories', ['doctor'], $args);
}
add_action('init', 'wporg_register_taxonomy_course');





function gall_cat_reg()
{
	$labels = array(
		'name'              => _x('Courses', 'taxonomy general name'),
		'singular_name'     => _x('Course', 'taxonomy singular name'),
		'search_items'      => __('Search Courses'),
		'all_items'         => __('All Courses'),
		'parent_item'       => __('Parent Course'),
		'parent_item_colon' => __('Parent Course:'),
		'edit_item'         => __('Edit Course'),
		'update_item'       => __('Update Course'),
		'add_new_item'      => __('Add New Course'),
		'new_item_name'     => __('New Course Name'),
		'menu_name'         => __('Course'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'course2'],
	);
	register_taxonomy('course2', ['gallery'], $args);
}

add_action('init', 'gall_cat_reg');


function cat_sel()
{
	$labels = array(
		'name'              => _x('categories', 'taxonomy general name'),
		'singular_name'     => _x('categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All categories'),
		'parent_item'       => __('Parent categories'),
		'parent_item_colon' => __('Parent categories:'),
		'edit_item'         => __('Edit categories'),
		'update_item'       => __('Update categories'),
		'add_new_item'      => __('Add New categories'),
		'new_item_name'     => __('New categories Name'),
		'menu_name'         => __('categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categories'],
	);
	register_taxonomy('categories', ['service'], $args);
}

add_action('init', 'cat_sel');



function cat_depart()
{
	$labels = array(
		'name'              => _x('categories', 'taxonomy general name'),
		'singular_name'     => _x('categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All categories'),
		'parent_item'       => __('Parent categories'),
		'parent_item_colon' => __('Parent categories:'),
		'edit_item'         => __('Edit categories'),
		'update_item'       => __('Update categories'),
		'add_new_item'      => __('Add New categories'),
		'new_item_name'     => __('New categories Name'),
		'menu_name'         => __('categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categories_depart'],
	);
	register_taxonomy('categories_depart', ['department'], $args);
}

add_action('init', 'cat_depart');




function cat_about()
{
	$labels = array(
		'name'              => _x('categories', 'taxonomy general name'),
		'singular_name'     => _x('categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All categories'),
		'parent_item'       => __('Parent categories'),
		'parent_item_colon' => __('Parent categories:'),
		'edit_item'         => __('Edit categories'),
		'update_item'       => __('Update categories'),
		'add_new_item'      => __('Add New categories'),
		'new_item_name'     => __('New categories Name'),
		'menu_name'         => __('categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categories_about'],
	);
	register_taxonomy('categories_about', ['about'], $args);
}

add_action('init', 'cat_about');


function cat_asked()
{
	$labels = array(
		'name'              => _x('categories', 'taxonomy general name'),
		'singular_name'     => _x('categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All categories'),
		'parent_item'       => __('Parent categories'),
		'parent_item_colon' => __('Parent categories:'),
		'edit_item'         => __('Edit categories'),
		'update_item'       => __('Update categories'),
		'add_new_item'      => __('Add New categories'),
		'new_item_name'     => __('New categories Name'),
		'menu_name'         => __('categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categories_asked'],
	);
	register_taxonomy('categories_asked', ['asked'], $args);
}

add_action('init', 'cat_asked');




function cat_slider()
{
	$labels = array(
		'name'              => _x('categories', 'taxonomy general name'),
		'singular_name'     => _x('categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All categories'),
		'parent_item'       => __('Parent categories'),
		'parent_item_colon' => __('Parent categories:'),
		'edit_item'         => __('Edit categories'),
		'update_item'       => __('Update categories'),
		'add_new_item'      => __('Add New categories'),
		'new_item_name'     => __('New categories Name'),
		'menu_name'         => __('categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categories_slider'],
	);
	register_taxonomy('categories_slider', ['slider'], $args);
}

add_action('init', 'cat_slider');










function hero_sec()
{
	$labels = array(
		'name'              => _x('categories', 'taxonomy general name'),
		'singular_name'     => _x('categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All categories'),
		'parent_item'       => __('Parent categories'),
		'parent_item_colon' => __('Parent categories:'),
		'edit_item'         => __('Edit categories'),
		'update_item'       => __('Update categories'),
		'add_new_item'      => __('Add New categories'),
		'new_item_name'     => __('New categories Name'),
		'menu_name'         => __('categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categories_hero'],
	);
	register_taxonomy('categories_hero', ['hero'], $args);
}

add_action('init', 'hero_sec');





function whyme_sec()
{
	$labels = array(
		'name'              => _x('categories', 'taxonomy general name'),
		'singular_name'     => _x('categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All categories'),
		'parent_item'       => __('Parent categories'),
		'parent_item_colon' => __('Parent categories:'),
		'edit_item'         => __('Edit categories'),
		'update_item'       => __('Update categories'),
		'add_new_item'      => __('Add New categories'),
		'new_item_name'     => __('New categories Name'),
		'menu_name'         => __('categories'),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'categories_whyme'],
	);
	register_taxonomy('categories_whyme', ['whyme'], $args);
}

add_action('init', 'whyme_sec');



// FOR Custom Header
add_theme_support('custom-header');