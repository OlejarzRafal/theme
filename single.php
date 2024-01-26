<?php
get_header();
?>
<main data-id="post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('pages/Single/Post/component', 'hero')?>
    <?php get_template_part('pages/Single/Post/component', 'content')?>
    <?php get_template_part('pages/Single/Post/component', 'more')?>
    <?php endwhile; else: ?>
    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
    <?php endif; ?>
</main>

<?php
get_footer();