<?php 

/*   
==============================
    Register custom post FAQ
==============================
*/
add_action( 'init', 'case_studies' );
function case_studies() {
	$labels = array(
		'name'               => _x( 'Case Studies', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Case Studies', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Case Studies', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Case Studies', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'case-studies', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Case Studies', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Case Studies', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Case Studies', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Case Studies', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Case Studies', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Case Studies', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Case Studies:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No case-studies found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No case-studies found in Trash.', 'your-plugin-textdomain' )
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'case-studies' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'case-studies', $args );
}

//----------=======>>> Create a custom taxonomy for FAQ
add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
function create_subjects_hierarchical_taxonomy() {
	$labels = array(
		'name' => _x( 'Case Studies Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Case Studies Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Case Studies Categories' ),
		'all_items' => __( 'All Case Studies Categories' ),
		'parent_item' => __( 'Parent Case Studies Category' ),
		'parent_item_colon' => __( 'Parent Case Studies Category:' ),
		'edit_item' => __( 'Edit Case Studies Category' ), 
		'update_item' => __( 'Update Case Studies Category' ),
		'add_new_item' => __( 'Add New Case Studies Category' ),
		'new_item_name' => __( 'New Case Studies Category Name' ),
		'menu_name' => __( 'Case Studies Categories' ),
	);    
  	register_taxonomy('case-studies-category',
		array('case-studies'), 
		array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'case-studies-category' ),
    )
  );
}

