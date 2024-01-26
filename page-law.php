<?php
/* Template Name: Prawo gospodarcze/bankowe */
?>

<?php get_header(); ?>

<main data-id="law">
    <?php
    get_template_part('components/content', 'hero');
    get_template_part('pages/Law/content', 'offerBox');
    get_template_part('pages/Law/content', 'text');
    get_template_part('components/content', 'blog');
    ?>
</main>
<?php
get_footer();
