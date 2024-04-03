<?php
/* Template Name: Home */
?>

<?php get_header(); ?>
<main data-id="home">
    <?php get_template_part('pages/Home/content', 'hero') ?>
    <?php get_template_part('pages/Home/content', 'law') ?>
    <?php get_template_part('pages/Home/content', 'work') ?>
    <?php get_template_part('pages/Home/content', 'team') ?>
    <?php get_template_part('pages/Home/content', 'reviews') ?>
    <?php get_template_part('pages/Home/content', 'logotype') ?>
    <?php get_template_part('components/content', 'blog'); ?>
</main>
<?php
get_footer();
