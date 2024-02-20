<?php
/**
 * Plugin Name: Meta Box
 * Plugin URI:  https://metabox.io
 * Description: Create custom meta boxes and custom fields in WordPress.
 * Version:     5.3.3
 * Author:      MetaBox.io
 * Author URI:  https://metabox.io
 * License:     GPL2+
 * Text Domain: meta-box
 * Domain Path: /languages/
 *
 * @package Meta Box
 */

if ( defined( 'ABSPATH' ) && ! defined( 'RWMB_VER' ) ) {
    register_activation_hook( __FILE__, 'rwmb_check_php_version' );

    /**
     * Display notice for old PHP version.
     */
    function rwmb_check_php_version() {
        if ( version_compare( phpversion(), '5.3', '<' ) ) {
            die( esc_html__( 'Meta Box requires PHP version 5.3+. Please contact your host to upgrade.', 'meta-box' ) );
        }
    }

    require_once dirname( __FILE__ ) . '/inc/loader.php';
    $rwmb_loader = new RWMB_Loader();
    $rwmb_loader->init();


    add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {

    $prefix = '_cmb_';


  // Open Code

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Featured Image 2',
                'desc' => 'Show on recent posts',
                'id'   => $prefix . 'featured_image_2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Title 2',
                'desc' => 'Input title for blog on home page',
                'id'   => $prefix . 'title_2',
                'type'    => 'textarea',
            ), 
            array(
                'name' => 'Featured Image 3',
                'desc' => 'Show on blog standard',
                'id'   => $prefix . 'featured_image_3',
                'type'    => 'file',
            ),           
        )
    );
    $meta_boxes[] = array(
        'id'         => 'service_setting',
        'title'      => 'Service Setting',
        'pages'      => array('service'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Icon',
                'desc' => 'Show On Home 1',
                'id'   => $prefix . 'sv_icon',
                'type'    => 'file',
            ),
            array(
                'name' => 'Short Title',
                'desc' => 'Show On Home 1',
                'id'   => $prefix . 'short_title',
                'type'    => 'text',
            ), 
            array(
                'name' => 'Icon 2',
                'desc' => 'Show On Home 1',
                'id'   => $prefix . 'sv_icon_2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Icon 3',
                'desc' => 'Show On Home 1',
                'id'   => $prefix . 'sv_icon_3',
                'type'    => 'file',
            ),         
        )
    );
    $meta_boxes[] = array(
        'id'         => 'project_setting',
        'title'      => 'Project Setting',
        'pages'      => array('project'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
            array(
                'name' => 'Featured Image 2',
                'desc' => 'Show On Home 1',
                'id'   => $prefix . 'p_featured_image_2',
                'type'    => 'file',
            ),   
            array(
                'name' => 'Description',
                'desc' => 'Show On Home 1',
                'id'   => $prefix . 'p_description',
                'type'    => 'textarea',
            ),      
        )
    );
    // Add other metaboxes as needed
    
    return $meta_boxes;
});
}
