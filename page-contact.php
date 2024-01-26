<?php
/* Template Name: Kontakt */
?>

<?php get_header(); ?>
<main data-id="contact">
  <?php 
    get_template_part('components/content', 'hero');
    get_template_part('pages/Contact/content', 'contact');
  ?>
</main>
<?php
get_footer();