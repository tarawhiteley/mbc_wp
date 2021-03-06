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
}

/* Services Custom Post Type */
register_post_type('services', // Register Custom Post Type
    array(
    'labels' => array(
        'name' => __('Services', 'html5blank'), // Rename these to suit
        'singular_name' => __('Service', 'html5blank'),
        'add_new' => __('Add New', 'html5blank'),
        'add_new_item' => __('Add New Service', 'html5blank'),
        'edit' => __('Edit', 'html5blank'),
        'edit_item' => __('Edit Service', 'html5blank'),
        'new_item' => __('New Service', 'html5blank'),
        'view' => __('View Services', 'html5blank'),
        'view_item' => __('View Services', 'html5blank'),
        'search_items' => __('Search Service', 'html5blank'),
        'not_found' => __('No Services found', 'html5blank'),
        'not_found_in_trash' => __('No Services found in Trash', 'html5blank')
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
    'menu_icon' => 'dashicons-welcome-add-page',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
    'can_export' => true // Allows export in Tools > Export
));
register_taxonomy(
    'type_of_service',    // Taxonomy
    'services',             // Object Type
    array(
        'label' => __( 'Type' ),
        'rewrite' => array( 'slug' => 'type' ),
        'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
    )
);

/* Industries Custom Post Type */
register_post_type('industries', // Register Custom Post Type
    array(
    'labels' => array(
        'name' => __('Industries', 'html5blank'), // Rename these to suit
        'singular_name' => __('Industry', 'html5blank'),
        'add_new' => __('Add New', 'html5blank'),
        'add_new_item' => __('Add New Industry', 'html5blank'),
        'edit' => __('Edit', 'html5blank'),
        'edit_item' => __('Edit Industry', 'html5blank'),
        'new_item' => __('New Industry', 'html5blank'),
        'view' => __('View Industry', 'html5blank'),
        'view_item' => __('View Industry', 'html5blank'),
        'search_items' => __('Search Industries', 'html5blank'),
        'not_found' => __('No Industries found', 'html5blank'),
        'not_found_in_trash' => __('No Industries found in Trash', 'html5blank')
    ),
    'public' => true,
    'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
    'has_archive' => true,
    'supports' => array(
        'title',
        'editor',
        'excerpt',

    ), // Go to Dashboard Custom HTML5 Blank post for supports
    'menu_icon' => 'dashicons-welcome-add-page',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
    'can_export' => true // Allows export in Tools > Export
));
