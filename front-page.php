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
    <?php get_template_part('components/content', 'blog'); ?>

</main>
<?php
get_footer();


/*
1. HomePage
 - zajmuje sie rowwniez? co tutaj foty czy teksty czy co?
 - zespol - ocb z ta zmiana zdjec, czy to sa juz te odpowienies
 - nasi klienci- jakas zmiana tekstu, ale to chyba bartokowu zostawic nie?
 - logotypy, czy to juz nowe? czy bedzie ich wiecej czy tyle ile jest - loop kriuzela
 - blog -  tutaj wiedze jakis wpis ze jakies grafiki do kategori od kogos? przeciez blog ma byc podobno zaciagany to raz a dwa ze to nie sa kategorie?

 do przegadnia z bartkiem.


2. Aktualnosci
 -podobnie jak z blogiem, jakie kategorie?
  - zajawka bloga, jakie ikony


3. Grafika i koncepcja strony w stopce ocb?