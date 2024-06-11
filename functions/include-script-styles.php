<?php
function add_theme_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.4', 'all');


    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',  get_template_directory_uri() . '/assets/vendors/jquery.js', array(), '1.1.0', true);
    wp_enqueue_script('pagination',  get_template_directory_uri() . '/assets/vendors/pagination.js', array(), '1.1.0', true);

    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '1.0.4', true);
}
add_action('wp_enqueue_scripts', 'add_theme_assets');
