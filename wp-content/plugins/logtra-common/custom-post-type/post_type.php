<?php
// register post type project

add_action( 'init', 'register_logtra_project' );

function register_logtra_project() {  

    $labels = array( 

        'name' => __( 'Project', 'logtra' ),

        'singular_name' => __( 'Project', 'logtra' ),

        'add_new' => __( 'Add New Project', 'logtra' ),

        'add_new_Project' => __( 'Add New Project', 'logtra' ),

        'edit_Project' => __( 'Edit Project', 'logtra' ),

        'new_Project' => __( 'New Project', 'logtra' ),

        'view_Project' => __( 'View Project', 'logtra' ),

        'search_Projects' => __( 'Search Project', 'logtra' ),

        'not_found' => __( 'No Project Found', 'logtra' ),

        'not_found_in_trash' => __( 'No Project found in Trash', 'logtra' ),

        'parent_Project_colon' => __( 'Parent Project:', 'logtra' ),

        'menu_name' => __( 'Project', 'logtra' ),

    );

    $args = array( 

        'labels' => $labels,

        'hierarchical' => true,

        'description' => 'List Project',

        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),

        'taxonomies' => array( 'project', 'type1','category1' ),

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'menu_position' => 5,

        'menu_icon' => 'dashicons-portfolio', 

        'show_in_nav_menus' => true,

        'publicly_queryable' => true,

        'exclude_from_search' => false,

        'has_archive' => true,

        'query_var' => true,

        'can_export' => true,

        'rewrite' => true,

        'capability_type' => 'post'
    );


    register_post_type( 'project', $args );

}

add_action( 'init', 'create_type1_hierarchical_taxonomy', 0 );

add_action( 'init', 'create_category1_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts


function create_type1_hierarchical_taxonomy() {


// Add new taxonomy, make it hierarchical like Skills

//first do the translations part for GUI


  $labels = array(

    'name' => __( 'Type', 'logtra' ),

    'singular_name' => __( 'Type', 'logtra' ),

    'search_Projects' =>  __( 'Search Type','logtra' ),

    'all_Projects' => __( 'All Type','logtra' ),

    'parent_Project' => __( 'Parent Type','logtra' ),

    'parent_Project_colon' => __( 'Parent Type:','logtra' ),

    'edit_Project' => __( 'Edit Type','logtra' ), 

    'update_Project' => __( 'Update Type','logtra' ),

    'add_new_Project' => __( 'Add New Type','logtra' ),

    'new_Project_name' => __( 'New Type Name','logtra' ),

    'menu_name' => __( 'Type','logtra' ),

  );     

// Now register the taxonomy

  register_taxonomy('type1',array('project'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'type' ),

  ));

}

function create_category1_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Category', 'logtra' ),
    'singular_name' => __( 'Category', 'logtra' ),
    'search_Projects' =>  __( 'Search Category','logtra' ),
    'all_Projects' => __( 'All Category','logtra' ),
    'parent_Project' => __( 'Parent Category','logtra' ),
    'parent_Project_colon' => __( 'Parent Category:','logtra' ),
    'edit_Project' => __( 'Edit Category','logtra' ), 
    'update_Project' => __( 'Update Category','logtra' ),
    'add_new_Project' => __( 'Add New Category','logtra' ),
    'new_Project_name' => __( 'New Category Name','logtra' ),
    'menu_name' => __( 'Category','logtra' ),
  );     

// Now register the taxonomy

  register_taxonomy('category1',array('project'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category1' ),
  ));
}
// register post type service

add_action( 'init', 'register_logtra_service' );

function register_logtra_service() {  

    $labels = array( 

        'name' => __( 'Service', 'logtra' ),

        'singular_name' => __( 'Service', 'logtra' ),

        'add_new' => __( 'Add New Service', 'logtra' ),

        'add_new_Service' => __( 'Add New Service', 'logtra' ),

        'edit_Service' => __( 'Edit Service', 'logtra' ),

        'new_Service' => __( 'New Service', 'logtra' ),

        'view_Service' => __( 'View Service', 'logtra' ),

        'search_Services' => __( 'Search Service', 'logtra' ),

        'not_found' => __( 'No Service found', 'logtra' ),

        'not_found_in_trash' => __( 'No Service found in Trash', 'logtra' ),

        'parent_Service_colon' => __( 'Parent Service:', 'logtra' ),

        'menu_name' => __( 'Service', 'logtra' ),

    );

    $args = array( 

        'labels' => $labels,

        'hierarchical' => true,

        'description' => 'List Service',

        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),

        'taxonomies' => array( 'service', 'type2','category2' ),

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'menu_position' => 5,

        'menu_icon' => 'dashicons-list-view', 

        'show_in_nav_menus' => true,

        'publicly_queryable' => true,

        'exclude_from_search' => false,

        'has_archive' => true,

        'query_var' => true,

        'can_export' => true,

        'rewrite' => true,

        'capability_type' => 'post'
    );


    register_post_type( 'service', $args );

}

add_action( 'init', 'create_type2_hierarchical_taxonomy', 0 );

add_action( 'init', 'create_category2_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts


function create_type2_hierarchical_taxonomy() {


// Add new taxonomy, make it hierarchical like Skills

//first do the translations part for GUI


  $labels = array(

    'name' => __( 'Type', 'logtra' ),

    'singular_name' => __( 'Type', 'logtra' ),

    'search_Services' =>  __( 'Search Type','logtra' ),

    'all_Services' => __( 'All Type','logtra' ),

    'parent_Service' => __( 'Parent Type','logtra' ),

    'parent_Service_colon' => __( 'Parent Type:','logtra' ),

    'edit_Service' => __( 'Edit Type','logtra' ), 

    'update_Service' => __( 'Update Type','logtra' ),

    'add_new_Service' => __( 'Add New Type','logtra' ),

    'new_Service_name' => __( 'New Type Name','logtra' ),

    'menu_name' => __( 'Type','logtra' ),

  );     

// Now register the taxonomy

  register_taxonomy('type2',array('service'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'type' ),

  ));

}

function create_category2_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Category', 'logtra' ),
    'singular_name' => __( 'Category', 'logtra' ),
    'search_Services' =>  __( 'Search Category','logtra' ),
    'all_Services' => __( 'All Category','logtra' ),
    'parent_Service' => __( 'Parent Category','logtra' ),
    'parent_Service_colon' => __( 'Parent Category:','logtra' ),
    'edit_Service' => __( 'Edit Category','logtra' ), 
    'update_Service' => __( 'Update Category','logtra' ),
    'add_new_Service' => __( 'Add New Category','logtra' ),
    'new_Service_name' => __( 'New Category Name','logtra' ),
    'menu_name' => __( 'Category','logtra' ),
  );     

// Now register the taxonomy

  register_taxonomy('category2',array('service'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'category2' ),
  ));

}

?>