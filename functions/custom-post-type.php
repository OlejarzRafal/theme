<?php

function newscpt()
{
    $news = array(
        'name'                => _x('Aktualności', 'Post Type General Name'),
        'singular_name'       => _x('Aktualności', 'Post Type Singular Name'),
        'menu_name'           => __('Aktualności '),
        'all_items'           => __('Aktualności '),
        'view_item'           => __('Zobacz'),
        'add_new_item'        => __('Dodaj'),
        'add_new'             => __('Dodaj nowy'),
        'edit_item'           => __('Edytuj'),
        'search_items'        => __('Szukaj'),
    );
    $news_args = array(
        'label'               => __('aktualnosci'),
        'labels'              => $news,
        'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt', 'author'),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'menu_position'       => 9,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        // 'rewrite' => false,
        // 'rewrite' => array('slug' => '/', 'with_front' => false),
    );
    register_post_type('aktualnosci_cpt', $news_args);
}
add_action('init', 'newscpt', 0);
