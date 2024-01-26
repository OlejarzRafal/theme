<?php
/* Template Name: Team */
?>

<?php get_header(); ?>
<main data-id="team">
  <?php 
    get_template_part('components/content', 'hero');
    get_template_part('pages/Team/content', 'about');
    get_template_part('pages/Team/content', 'slider');
    get_template_part('pages/Team/content', 'team');
    get_template_part('pages/Team/content', 'cowork');
    get_template_part('pages/Team/content', 'strength');
    get_template_part('pages/Team/content', 'media');
  ?>
</main>
<?php
get_footer();