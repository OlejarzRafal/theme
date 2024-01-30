<?php
/* Template Name: Prawo - strona wpisu */
?>

<?php get_header(); ?>

<main data-id="law-single" class="law-single">
    <?php
    get_template_part('components/content', 'hero');
    get_template_part('pages/LawSingle/content', 'content');
    ?>
</main>
<?php
get_footer();
