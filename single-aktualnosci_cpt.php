<?php
get_header(); ?>

<div class="post">
    <?php get_template_part('pages/Single/content', 'singleContent'); ?>
    <?php get_template_part('components/content', 'help'); ?>
    <?php get_template_part('components/content', 'blog'); ?>
</div>

<?php
get_footer();
