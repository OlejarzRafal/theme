<?php
/* Template Name: Blog */
?>

<?php get_header(); ?>
<main data-id="blog">
    <?php
    get_template_part('components/content', 'hero-single');
    get_template_part('pages/Blog/content', 'list');
    ?>
</main>
<?php
get_footer();
