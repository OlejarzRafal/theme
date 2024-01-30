<?php
get_header(); ?>

<main data-id="page-default" class="page-dafault">
    <?php
    get_template_part('components/content', 'hero'); ?>

    <div class="page-dafault__container">
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer();
