<?php

/*

first 2 are for display custom link after home in breadcrumbs
$link - url to page
$name - name of page 

$taxonomy - if you want to display taxonomy in bradcrumbs type slug

true/false - to hide archive link (true for display)

EXAMPLEs:
theme_breadcrumbs('Blog', '/blog/', 'blog_cat', false);
theme_breadcrumbs('Blog', '/blog/', 'blog_cat', true)
theme_breadcrumbs('Blog', '/blog/', '', false);
theme_breadcrumbs('Blog', '', 'blog_cat', true);
theme_breadcrumbs('Blog', '', '', true);
theme_breadcrumbs('','','', true);
theme_breadcrumbs('','','', false);

DEFAULT USE: 
theme_breadcrumbs('','','', true);
*/



// Breadcrumbs
function theme_breadcrumbs($name, $link, $taxonomy, $show_archive)
{

    // Settings
    $home = file_get_contents(get_template_directory() . '/assets/img/breadcrumbs-home.svg') . '<span class="breadcrumbs__home-text">Strona główna</span>';
    $separator = file_get_contents(get_template_directory() . '/assets/img/breadcrumbs-sep.svg');

    // Get the query & post information
    global $post, $wp_query;

    // Do not display on the homepage
    if (!is_front_page()) {

        // Build the breadcrums
        echo '<ul class="breadcrumbs">';

        // Home page
        echo '<li class="breadcrumbs__home"><a href="' . get_home_url() . '">' .  $home . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';

        //args
        if (!empty($link) && !empty($name)) {
            echo '<li class="breadcrumbs__active-parent"> <a href="' . get_home_url() . $link . '">' . $name . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';
        } else if (empty($link) && !empty($name)) {
            echo '<li >' . $name . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';
        }

        if (is_archive() && !is_tax() && !is_category() && !is_tag()) {

            echo '<li class="breadcrumbs__current">' . post_type_archive_title($name, false) . '</li>';
        } else if (is_archive() && is_tax() && !is_category() && !is_tag()) {

            // If post is a custom post type
            $post_type = get_post_type();


            // If it is a custom post type display name and link
            if ($post_type != 'post' && $show_archive == true) {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="breadcrumbs__category"> <a href="' . $testname . '" >' . $post_type_object->labels->name . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';
            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="breadcrumbs__current">' . $custom_tax_name . '</li>';
        } else if (is_single()) {

            if ($post->post_parent) {

                // If child page, get parents 
                $anc = get_post_ancestors($post->ID);

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if (!isset($parents)) $parents = null;
                foreach ($anc as $ancestor) {
                    $parents .= '<li ><a href="' . get_permalink($ancestor) . '" >' . get_the_title($ancestor) . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';
                }

                // Display parent pages
                echo $parents;
            }


            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if ($post_type != 'post' && $show_archive == true) {

                $collectivePage = "";
                if ($post_type == "newsy_cpt") {
                    $collectivePage_id = get_field('newsy_link_to_page_setacf', 'options');
                } else if ($post_type == "publikacje_cpt") {
                    $collectivePage_id = get_field('publikacje_link_to_page_setacf', 'options');
                } else if ($post_type == "konkursy_cpt") {
                    $collectivePage_id = get_field('konkursy_link_to_page_setacf', 'options');
                } else if ($post_type == "szkolenia_cpt") {
                    $collectivePage_id = get_field('szkolenia_link_to_page_setacf', 'options');
                } else if ($post_type == "wydarzenia_cpt") {
                    $collectivePage_id = get_field('wydarzenia_link_to_page_setacf', 'options');
                } else if ($post_type == "waznekomunikaty_cpt") {
                    $collectivePage_id = get_field('komunikaty_link_to_page_setacf', 'options');
                }

                function custom_breadcrumbs($page_id, $separator)
                {
                    $breadcrumbs = array();
                    while ($page_id) {
                        $page = get_post($page_id);
                        $template_name = get_page_template_slug($page_id);
                        $li_class = ($template_name == "template-pages/page-redirect.php") ? 'breadcrumbs__disabled' : '';

                        $breadcrumbs[] = array(
                            'title' => get_the_title($page_id),
                            'url' => get_permalink($page_id),
                            'class' => $li_class,
                        );
                        $page_id = $page->post_parent;
                    }
                    // Odwróć tablicę, aby wyświetlać od korzenia do liścia
                    $breadcrumbs = array_reverse($breadcrumbs);

                    $breadcrumbs_html = '';
                    foreach ($breadcrumbs as $crumb) {
                        $breadcrumbs_html .= '<li class="' . $crumb['class'] . '"><a href="' . $crumb['url'] . '">' . $crumb['title'] . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';
                    }
                    return $breadcrumbs_html;
                }

                $breadcrumbsCptSignle = custom_breadcrumbs($collectivePage_id, $separator);
                echo $breadcrumbsCptSignle;


                // $post_type_object = get_post_type_object($post_type);
                // $post_type_archive = get_post_type_archive_link($post_type);


                // echo '<li class="breadcrumbs__separator">' . $separator . '</li>';
                // echo '<li class="breadcrumbs__category"><a  href="' . $post_type_archive . '" >' . $post_type_object->labels->name . '</a></li>';
                // echo '<li class="breadcrumbs__separator">' . $separator . '</li>';
            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($taxonomy);
            if (empty($last_category) && !empty($taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms($post->ID, $taxonomy);
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
            }

            // Check if the post is in a category
            if (!empty($last_category)) {
                echo $cat_display;
                echo '<li >' . get_the_title() . '</li>';

                // Else if post is in a custom taxonomy
            } else if (!empty($cat_id)) {

                echo '<li ><a href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';
                echo '<li class="breadcrumbs__current">' . get_the_title() . '</li>';
            } else {
                echo '<li class="breadcrumbs__current">' . get_the_title() . '</li>';
            }
        } else if (is_page()) {

            // Standard page
            if ($post->post_parent) {

                // If child page, get parents 
                $anc = get_post_ancestors($post->ID);

                // Get parents in the right order
                $anc = array_reverse($anc);

                // Parent page loop
                if (!isset($parents)) $parents = null;
                foreach ($anc as $ancestor) {
                    $template_name = get_page_template_slug($ancestor);
                    if ($template_name == "template-pages/page-redirect.php") {
                        $li_class = 'breadcrumbs__disabled';
                    } else {
                        $li_class = '';
                    }
                    $parents .= '<li class="' . $li_class . '"><a href="' . get_permalink($ancestor) . '" >' . get_the_title($ancestor) . '</a><span class="breadcrumbs__separator">' . $separator . '</span></li>';
                }

                // Display parent pages
                echo $parents;

                // Current page
                echo '<li class="breadcrumbs__current">' . get_the_title() . '</li>';
            } else {

                // Just display current page if not parents
                echo '<li class="breadcrumbs__current">' . get_the_title() . '</li>';
            }
        } else if (get_query_var('paged')) {

            // Paginated archives
            echo '<li >' . __('Page') . ' ' . get_query_var('paged') . '</li>';
        } else if (is_search()) {

            // Search results page
            echo '<li>Search results</li>';
        } elseif (is_404()) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
        echo '</ul>';
    }
}
