<?php
get_header();
?>
<main data-id="industry">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php 
        $sections = ['hero', 'sbs', 'list', 'benefits'];
        foreach ($sections as $section) {  
            get_template_part('pages/Single/Industry/content', $section); 
        }
    ?>
    <?php get_template_part('components/content', 'references')?>
    <?php get_template_part('components/content', 'blog')?>
    <?php endwhile; else: ?>
    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
    <?php endif; ?>
</main>

<?php
get_footer();