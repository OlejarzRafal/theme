<?php
get_header(); ?>

<main data-id="subpage" class="subpage">
    <?php
    get_template_part('components/content', 'hero-single'); ?>
    <div class="subpage__container">
        <div class="subpage__content default-content-style">
            <?php the_content(); ?>
        </div>
    </div>
</main>

<?php get_footer();
