<?php
function my_custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
    wp_enqueue_script('my-custom-theme-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

// Include custom post types and custom fields
require get_template_directory() . '/inc/custom-post-types.php';
?>
