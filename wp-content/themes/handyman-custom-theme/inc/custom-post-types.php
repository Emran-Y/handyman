<?php
// Register Custom Post Types

function register_custom_post_types() {

    // Services Custom Post Type
    $services_labels = array(
        'name' => _x('Services', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Service', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __('Services', 'textdomain'),
        'all_items' => __('All Services', 'textdomain'),
        'add_new_item' => __('Add New Service', 'textdomain'),
        'edit_item' => __('Edit Service', 'textdomain'),
        'new_item' => __('New Service', 'textdomain'),
        'view_item' => __('View Service', 'textdomain'),
        'search_items' => __('Search Services', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    );

    $services_args = array(
        'label' => __('services', 'textdomain'),
        'description' => __('Service details', 'textdomain'),
        'labels' => $services_labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    register_post_type('services', $services_args);

    // Teams Custom Post Type
    $teams_labels = array(
        'name' => _x('Teams', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Team', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __('Teams', 'textdomain'),
        'all_items' => __('All Teams', 'textdomain'),
        'add_new_item' => __('Add New Team', 'textdomain'),
        'edit_item' => __('Edit Team', 'textdomain'),
        'new_item' => __('New Team', 'textdomain'),
        'view_item' => __('View Team', 'textdomain'),
        'search_items' => __('Search Teams', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    );

    $teams_args = array(
        'label' => __('teams', 'textdomain'),
        'description' => __('Team details', 'textdomain'),
        'labels' => $teams_labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    register_post_type('teams', $teams_args);

    // Testimonials Custom Post Type
    $testimonials_labels = array(
        'name' => _x('Testimonials', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Testimonial', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => __('Testimonials', 'textdomain'),
        'all_items' => __('All Testimonials', 'textdomain'),
        'add_new_item' => __('Add New Testimonial', 'textdomain'),
        'edit_item' => __('Edit Testimonial', 'textdomain'),
        'new_item' => __('New Testimonial', 'textdomain'),
        'view_item' => __('View Testimonial', 'textdomain'),
        'search_items' => __('Search Testimonials', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    );

    $testimonials_args = array(
        'label' => __('testimonials', 'textdomain'),
        'description' => __('Testimonial details', 'textdomain'),
        'labels' => $testimonials_labels,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );

    register_post_type('testimonials', $testimonials_args);
}

add_action('init', 'register_custom_post_types');
