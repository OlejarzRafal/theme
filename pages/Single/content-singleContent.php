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
$category_links = rtrim($category_links, ', ');
?>
<div class="post__container">
    <div class="post__breadcrumbs">
        <?php if ($post_type == 'aktualnosci_cpt') : ?>
            <?php
            theme_breadcrumbs('Aktualności', '/aktualnosci/', '', false);
            ?>
        <?php else : ?>
            <?php
            theme_breadcrumbs('Blog', '/blog/', '', false);
            ?>
        <?php endif; ?>

    </div>
    <div class="post__hero">
        <?php if ($post_hero_img) : ?>
            <img src="<?php echo esc_url($post_hero_img['url']); ?>" alt="<?php echo esc_attr($post_hero_img['alt']); ?>" />
        <?php endif; ?>
    </div>
    <div class="post__contentWrap <?php if (!$post_hero_img) : ?> post__contentWrap--noPhoto <?php endif; ?> ">
        <div class="post__data">
            <div class="post__data__wrap">
                <?php if ($post_type != 'aktualnosci_cpt') : ?>
                    <div class="post__data__author"><?php echo $author_name; ?></div>
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
    </div>
</div>