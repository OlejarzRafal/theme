<?php
/* Template Name: Aktualności */
?>

<?php get_header(); ?>
<main data-id="news">
  <?php 
    get_template_part('pages/News/content', 'list');
    get_template_part('pages/Recommendations/content', 'help');
    get_template_part('components/content', 'blog');
  ?>
</main>
<?php
get_footer();