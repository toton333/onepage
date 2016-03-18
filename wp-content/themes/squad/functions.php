<?php

//cmb2

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} 
if ( file_exists( dirname( __FILE__ ) . '/cmb2/functions.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/functions.php';
}

//redux
if (file_exists(dirname(__file__) .'/redux-framework-master/ReduxCore/framework.php' )) {
  include_once('redux-framework-master/ReduxCore/framework.php');

}
if (file_exists(dirname(__file__) .'/redux-framework-master/sample/config.php'  )) {
  include_once('redux-framework-master/sample/config.php');
}


if ( ! function_exists( 'onepage_setup' ) ) :

function onepage_setup() {
	
	load_theme_textdomain( 'onepage', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'title-tag' );

	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'onepage' ),
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
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

}
endif; // onepage_setup
add_action( 'after_setup_theme', 'onepage_setup' );


function onepage_script(){
wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
wp_register_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css' );
wp_register_style( 'animate', get_template_directory_uri().'/css/animate.css');
wp_register_style( 'onepage-style', get_template_directory_uri().'/css/style.css' );
wp_register_style( 'color', get_template_directory_uri().'/color/default.css' );

wp_enqueue_style('bootstrap' );
wp_enqueue_style('font-awesome' );
wp_enqueue_style('animate' );
wp_enqueue_style('onepage-style' );
wp_enqueue_style('color' );
//main stylesheet
wp_enqueue_style('main', get_stylesheet_uri() );

wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0', true);
wp_register_script( 'easing', get_template_directory_uri().'/js/jquery.easing.min.js', array('jquery'), '1.0', true);
wp_register_script( 'scroll', get_template_directory_uri().'/js/jquery.scrollTo.js', array('jquery'), '1.0', true);
wp_register_script( 'wow', get_template_directory_uri().'/js/wow.min.js', array('jquery'), '1.0', true);
wp_register_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0', true);

wp_enqueue_script( 'bootstrap');
wp_enqueue_script( 'easing');
wp_enqueue_script( 'scroll');
wp_enqueue_script('wow' );
wp_enqueue_script( 'custom');


}
add_action('wp_enqueue_scripts', 'onepage_script' );


//customizing blank drop down text in contact form 7
function my_wpcf7_form_elements($html) {
	$text = 'Choose One:';
	$html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
	return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');





