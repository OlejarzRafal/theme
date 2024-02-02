<?php
/* Template Name: Prawo - strona wpisu */
?>

<?php get_header(); ?>

<main data-id="law-single" class="law-single">
    <?php
    get_template_part('components/content', 'hero-single');
    get_template_part('pages/LawSingle/content', 'content');
    get_template_part('components/content', 'brands');
    get_template_part('components/content', 'blog');
    ?>
</main>
<?php
get_footer();
