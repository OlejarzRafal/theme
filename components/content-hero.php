<section data-id="c-hero">
    <div class="c-hero__container">
        <div class="c-hero__main">
            <div class="c-hero__left">
                
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<duv class="breadcrumbs">', '</duv>');
                }
                ?>
                <div class="c-hero__content">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_field('hero__content'); ?></p>
                </div>
            </div>
            <div class="c-hero__right">
                <div class="c-hero__image">
                    <?php
                    $image = get_field('hero__image');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <div class="blur"><img src="<?php echo esc_url($image['url']); ?>" role="presentation" alt="" loading="lazy" decoding="async" /></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>