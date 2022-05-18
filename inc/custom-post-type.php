<?php 

/*   
==============================
    Register custom post FAQ
==============================
*/
// add_action( 'init', 'faq' );
// function faq() {
// 	$labels = array(
// 		'name'               => _x( 'Faq', 'post type general name', 'your-plugin-textdomain' ),
// 		'singular_name'      => _x( 'Faq', 'post type singular name', 'your-plugin-textdomain' ),
// 		'menu_name'          => _x( 'Faq', 'admin menu', 'your-plugin-textdomain' ),
// 		'name_admin_bar'     => _x( 'Faq', 'add new on admin bar', 'your-plugin-textdomain' ),
// 		'add_new'            => _x( 'Add New', 'faq', 'your-plugin-textdomain' ),
// 		'add_new_item'       => __( 'Add New Faq', 'your-plugin-textdomain' ),
// 		'new_item'           => __( 'New Faq', 'your-plugin-textdomain' ),
// 		'edit_item'          => __( 'Edit Faq', 'your-plugin-textdomain' ),
// 		'view_item'          => __( 'View Faq', 'your-plugin-textdomain' ),
// 		'all_items'          => __( 'All Faq', 'your-plugin-textdomain' ),
// 		'search_items'       => __( 'Search Faq', 'your-plugin-textdomain' ),
// 		'parent_item_colon'  => __( 'Parent Faq:', 'your-plugin-textdomain' ),
// 		'not_found'          => __( 'No faq found.', 'your-plugin-textdomain' ),
// 		'not_found_in_trash' => __( 'No faq found in Trash.', 'your-plugin-textdomain' )
// 	);
// 	$args = array(
// 		'labels'             => $labels,
// 		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => 'faq' ),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => null,
// 		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
// 	);
// 	register_post_type( 'faq', $args );
// }

// //----------=======>>> Create a custom taxonomy for FAQ
// add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
// function create_subjects_hierarchical_taxonomy() {
// 	$labels = array(
// 		'name' => _x( 'Faq Categories', 'taxonomy general name' ),
// 		'singular_name' => _x( 'Faq Category', 'taxonomy singular name' ),
// 		'search_items' =>  __( 'Search Faq Categories' ),
// 		'all_items' => __( 'All Faq Categories' ),
// 		'parent_item' => __( 'Parent Faq Category' ),
// 		'parent_item_colon' => __( 'Parent Faq Category:' ),
// 		'edit_item' => __( 'Edit Faq Category' ), 
// 		'update_item' => __( 'Update Faq Category' ),
// 		'add_new_item' => __( 'Add New Faq Category' ),
// 		'new_item_name' => __( 'New Faq Category Name' ),
// 		'menu_name' => __( 'Faq Categories' ),
// 	);    
//   	register_taxonomy('faq-category',
// 		array('faq'), 
// 		array(
// 		'hierarchical' => true,
// 		'labels' => $labels,
// 		'show_ui' => true,
// 		'show_in_rest' => true,
// 		'show_admin_column' => true,
// 		'query_var' => true,
// 		'rewrite' => array( 'slug' => 'faq-category' ),
//     )
//   );
// }

