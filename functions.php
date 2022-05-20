<?php
///----------=======>>> auto update theme & plugin <<<=======----------
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_core', '__return_true' );

//----------=======>>> Enable support for Post Thumbnails <<<=======----------
add_theme_support( 'post-thumbnails' );
// set_post_thumbnail_size(672, 372, true);
// add_image_size( 'home-hero', 400, 400, array('center','bottom') );
// add_image_size( 'home-hero', 1000, 380, true );

//----------=======>>> Include Files <<<=======----------    
require_once  get_template_directory().('/inc/shortcodes.php');
require_once  get_template_directory().('/inc/custom-post-type.php');

//----------=======>>> Makes the WordPress Theme available for translation. <<<=======----------
load_theme_textdomain( 'mdf_theme_translate', get_template_directory() . '/languages' );

//----------=======>>> Enqueue stylesheets in our theme <<<=======----------
function ahr_theme_styles() {
	wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), 'v4.3.1', 'all' );
	$style_ver = filemtime( get_stylesheet_directory() . '/assets/css/style.min.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/style.min.css', '', $style_ver );
}
add_action( 'wp_print_styles', 'ahr_theme_styles' );

//----------=======>>> Enqueue JavaScript in our theme <<<=======---------- 
function ahr_theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', "", '3.3.1', true );
	wp_enqueue_script( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', "", '4.1.3', true );
	$style_ver = filemtime( get_template_directory() . '/assets/js/all.min.js' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/all.min.js', '', $style_ver, true);

}
add_action( 'wp_enqueue_scripts', 'ahr_theme_scripts' );

//----------=======>>> Register custom navigation Bootstrap walker <<<=======----------
require_once get_template_directory() . '/inc/theme-nav.php';

//----------=======>>> ACF - Options <<<=======----------
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title' => 'Site Options',
			'menu_title' => 'Site Options',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false
		)
	);    
}

//----------=======>>> Add Menus under WP Appearance <<<=======----------
function the_nav_menu(){
	add_theme_support('menus');
	register_nav_menu('primary','Header Navigation');
	register_nav_menu('footer2','Footer Column2');
	register_nav_menu('footer3','Footer Column3');
	register_nav_menu('footer4','Footer Column4');
	register_nav_menu('footer5','Footer Column5');
}
add_action('init', 'the_nav_menu');

//----------=======>>> Set Excerpt Length <<<=======----------
function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


//----------=======>>> Enqueue Font Awesome Kit <<<=======---------- 
if (! function_exists('fa_custom_setup_kit') ) {
	function fa_custom_setup_kit($kit_url = '') {
		foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
			add_action(
			$action,
			function () use ( $kit_url ) {
				wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
			}
			);
		}
	}
}
fa_custom_setup_kit('https://kit.fontawesome.com/b263694896.js');
