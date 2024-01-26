<?php
/* Template Name: Rekomendacje */
?>

<?php get_header(); ?>
<main data-id="recommendations">
  <?php 
    get_template_part('components/content', 'hero');
    get_template_part('pages/Recommendations/content', 'logos');
    get_template_part('pages/Recommendations/content', 'reviews');
    get_template_part('pages/Recommendations/content', 'help');
    get_template_part('components/content', 'blog');
  ?>
</main>
<?php
get_footer();