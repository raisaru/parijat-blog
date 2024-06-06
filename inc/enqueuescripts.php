<?php


// Linking CSS and Javascripts required for pages
function project_script_enqueue()
{
    // wp_enqueue_style('project-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);
    wp_enqueue_style('theme_css1', get_stylesheet_directory_uri() . '/assets/css/theme-1.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-1.css'));
    wp_enqueue_style('theme_css2', get_stylesheet_directory_uri() . '/assets/css/theme-2.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-2.css'));
    wp_enqueue_style('theme_css3', get_stylesheet_directory_uri() . '/assets/css/theme-3.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-3.css'));
    wp_enqueue_style('theme_css4', get_stylesheet_directory_uri() . '/assets/css/theme-4.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-4.css'));
    wp_enqueue_style('theme_css5', get_stylesheet_directory_uri() . '/assets/css/theme-5.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-5.css'));
    wp_enqueue_style('theme_css6', get_stylesheet_directory_uri() . '/assets/css/theme-6.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-6.css'));
    wp_enqueue_style('theme_css7', get_stylesheet_directory_uri() . '/assets/css/theme-7.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-7.css'));
    wp_enqueue_style('theme_css8', get_stylesheet_directory_uri() . '/assets/css/theme-8.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme-8.css'));
    wp_enqueue_style('support', get_stylesheet_directory_uri() . '/assets/support.css', array(), filemtime(get_stylesheet_directory() . '/assets/support.css'));

    
    
    
    // wp_enqueue_style('support_wp_style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));

    // wp_register_script( 'ajax-product', get_stylesheet_directory_uri() . '/assets/js/ajax-product.js', array( 'jquery' ), filemtime( get_stylesheet_directory() . '/assets/js/ajax-product.js'), true );
    // wp_localize_script( 'ajax-product', 'ajax_product_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    // wp_enqueue_script( 'ajax-product' );
    
    wp_enqueue_script('main_script', get_stylesheet_directory_uri() . '/assets/js/blog.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/blog.js'), true);
    wp_enqueue_script('main_js1', get_stylesheet_directory_uri() . '/assets/js/demo/style-switcher.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/demo/style-switcher.js'), true);
    
    wp_enqueue_script('main_js2', get_stylesheet_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/plugins/bootstrap/js/bootstrap.min.js'), true);
    wp_enqueue_script('main_js3', get_stylesheet_directory_uri() . '/assets/plugins/jquery-3.3.1.min.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/plugins/jquery-3.3.1.min.js'), true);
    wp_enqueue_script('main_js4', get_stylesheet_directory_uri() . '/assets/plugins/popper.min.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/plugins/popper.min.js'), true);
    // wp_enqueue_script('main_js5', get_stylesheet_directory_uri() . '/assets/js/all.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/all.js'), true);


}
add_action('wp_enqueue_scripts', 'project_script_enqueue');


