<?php
$post_id = get_the_ID();
$post_type = get_post_type($post_id);

$author_id = get_post_field('post_author', get_the_ID());
$author_name = get_the_author_meta('display_name', $author_id);
$post_hero_img = get_field('post_hero_img');
$categories = get_the_category($post_id);
$category_links = '';
if ($categories) {
    foreach ($categories as $category) {
        $category_name = $category->name;
        $category_link = get_category_link($category->term_id);
        $category_links .= '<a href="' . esc_url($category_link) . '">' . esc_html($category_name) . '</a>, ';
    }
}
$post_autor_link = get_field('post_autor_link', 'user_' . $author_id);
$category_links = rtrim($category_links, ', ');
?>
<div class="post__container">
    <div class="post__breadcrumbs">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<duv class="breadcrumbs">', '</duv>');
        }
        ?>

    </div>
    <div class="post__hero">
        <?php if ($post_hero_img) : ?>
            <img src="<?php echo esc_url($post_hero_img['url']); ?>" alt="<?php echo esc_attr($post_hero_img['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="post__contentWrap <?php if (!$post_hero_img) : ?> post__contentWrap--noPhoto <?php endif; ?> ">
        <div class="post__descWrap">
            <div class="post__data">
                <div class="post__data__wrap">
                    <?php if ($post_type != 'aktualnosci_cpt') : ?>
                        <?php
                        if ($post_autor_link) :
                            $link_url =  $post_autor_link['url'];
                            $link_title =  $post_autor_link['title'];
                            $link_target =  $post_autor_link['target'] ?  $post_autor_link['target'] : '_self';
                        ?>
                            <div class="post__data__author post__data__author--link"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo $author_name; ?>
                                </a>
                            </div>
                        <?php else : ?>
                            <div class="post__data__author"><?php echo $author_name; ?></div>
                        <?php endif; ?>

                        <div class="post__data__separator"></div>
                    <?php endif; ?>
                    <div class="post__date__date"><?php echo get_the_date(); ?></div>
                </div>
                <?php if ($post_type != 'aktualnosci_cpt') : ?>
                    <div class="post__data__wrap">
                        <div class="post__data__category">
                            kategoria: <?php echo $category_links; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <h1 class="post__title"><?php the_title(); ?></h1>
            <div class="post__content default-content-style">
                <?php the_content(); ?>
            </div>
            <?php get_template_part('pages/Single/content', 'singleAuthor'); ?>

        </div>
        <div class="post__sidebar">
            <div class="sidebar">
                <a href="#" class="sidebar__btnOffer">Sprawdź naszą ofertę</a>



                <div class="sidebar__lastPost">
                    <p class="sidebar__header">Ostatnie wpisy:</p>
                    <ul>
                        <?php
                        $current_post_id = get_the_ID();
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post__not_in' => array($current_post_id)
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $title = get_the_title();
                                if (mb_strlen($title) > 80) {
                                    $title = mb_substr($title, 0, 80) . '...';
                                }
                        ?>
                                <li><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></li>
                            <?php
                            }
                            wp_reset_postdata();
                        } else {
                            ?>
                            <li>Brak ostatnich wpisów.</li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="sidebar__category">
                    <p class="sidebar__header">Kategorie:</p>
                    <ul>
                        <?php
                        $categories = get_categories();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</div>