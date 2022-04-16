<?php


function megakit_assets() {

    load_theme_textdomain( 'megakit', get_template_directory() . '/languages' );

    add_theme_support('post-thumbnails', array('post', 'services'));

    register_nav_menus( array(
        'primary' => __('Primary', 'megakit')
    ) );

}
add_action('after_setup_theme', 'megakit_assets');


function megakit_cpt() {

    // Service Custom Post
    $labels = array(
        'name'                  => __( 'Services', 'Post type general name', 'recipe' ),
        'singular_name'         => __( 'Service', 'Post type singular name', 'recipe' ),
        'menu_name'             => __( 'Services', 'Admin Menu text', 'recipe' ),
        'not_found'             => __( 'No Services Found', 'Admin Menu text', 'recipe' ),
    );

    $args = array(
        'public'    => true,
        'labels'    => $labels,
        'label'     => __( 'Services', 'megakit' ),
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('services', $args);


    // Testimonials Custom Post
    $labels = array(
        'name'                  => __( 'Testimonials', 'Post type general name', 'recipe' ),
        'singular_name'         => __( 'Testimonial', 'Post type singular name', 'recipe' ),
        'menu_name'             => __( 'Testimonials', 'Admin Menu text', 'recipe' ),
        'not_found'             => __( 'No Testimonials Found', 'Admin Menu text', 'recipe' ),
    );

    $args = array(
        'public'    => true,
        'labels'    => $labels,
        'label'     => __( 'Testimonials', 'megakit' ),
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'custom-fields')
    );
    register_post_type('testimonials', $args);

}
add_action('init', 'megakit_cpt');


function megakit_css_js() {

    // CSS Files
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'main', get_stylesheet_uri() );

    // JS Files
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'megakit_css_js');