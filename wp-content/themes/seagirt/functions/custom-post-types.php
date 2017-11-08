<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    /*
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-format-status',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_staff',    // Taxonomy
        'staff',             // Object Type
        array(
            'label' => __( 'Type' ),
            'rewrite' => array( 'slug' => 'type' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
    */
    /*Custom Post Type: About Page*/
    register_post_type('tour', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Tour Page', 'html5blank'), // Rename these to suit
            'singular_name' => __('Tour Page', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Tour Page', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Tour Page', 'html5blank'),
            'new_item' => __('New Tour Page', 'html5blank'),
            'view' => __('View Tour Page', 'html5blank'),
            'view_item' => __('View Tour Page', 'html5blank'),
            'search_items' => __('Search Tour Page', 'html5blank'),
            'not_found' => __('No Tour Page found', 'html5blank'),
            'not_found_in_trash' => __('No Tour Page found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true, //If true, create custom archive.php page
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-camera',   // Select an icon to show in Dashboard, dashicons-whatever http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(  // Do you want categories and tags for these custom posts?
        'type_of_tour',    // Taxonomy = type_of_whatever(register name obove)
        'tour',             // Object Type = register name from above
        array(
            'label' => __( 'Tours' ), // This appears in WP
            'rewrite' => array( 'slug' => 'tours' ),  //THis is how url appears, change 'type'
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
}
