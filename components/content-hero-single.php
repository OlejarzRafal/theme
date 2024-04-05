<section data-id="c-hero" class="c-hero-single">
    <div class="c-hero__container">
        <div class="c-hero__main">
            <div class="c-hero__left">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<duv class="breadcrumbs">', '</duv>');
                }
                ?>

                <div class="c-hero__content">
                    <?php
                    if (is_category()) : ?>
                        <h2 class="h2">Kategoria: <?php echo single_cat_title(); ?></h2>
                    <?php else : ?>
                        <h1><?php the_title(); ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>