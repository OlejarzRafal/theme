<?php
// ACF Theme setting page

function my_acf_op_init()
{
    // Footer tabs
    acf_add_options_page(array(
        'page_title'     => 'Ustawienia ogólne',
        'menu_title'    => 'Ustawienia ogólne',
        'menu_slug'     => 'ustawienia-ogolne',
    ));

    // Footer tabs
    acf_add_options_page(array(
        'page_title'     => 'Sekcje globalne',
        'menu_title'    => 'Sekcje globalne',
        'menu_slug'     => 'section-global',
    ));
};
add_action('acf/init', 'my_acf_op_init');
