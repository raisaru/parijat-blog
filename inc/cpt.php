<?php
// Function to create custom post type
function create_posttype() {
    register_post_type( 'blog',
        array(
            'labels' => array(
                'name' => __( 'Blog' ),
                'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'blog'),
            'menu_icon' => 'dashicons-welcome-write-blog',
            'supports' => array('title', 'thumbnail', 'editor'),
            
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

// Add theme support for post thumbnails
add_theme_support( 'post-thumbnails' );
