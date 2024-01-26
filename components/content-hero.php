<section data-id="c-hero">
    <div class="c-hero__container">
        <div class="c-hero__main">
            <div class="c-hero__left">
                <div class="breadcrumbs">
                    <a href="<?php echo get_home_url(); ?>">Strona główna</a>
                    <span class="breadcrumbs__separator"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 5 10" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.45463 9.03363C0.59688 9.04605 0.743964 8.99841 0.853414 8.88896L4.38895 5.35343C4.58437 5.158 4.58368 4.84105 4.38895 4.64632L0.853414 1.11078C0.658683 0.916054 0.341728 0.915363 0.146307 1.11078C-0.0491141 1.30621 -0.0484236 1.62316 0.146307 1.81789L3.32829 4.99987L0.146307 8.18185C-0.0491141 8.37727 -0.0484236 8.69423 0.146307 8.88896C0.231933 8.97459 0.341383 9.02258 0.45463 9.03363Z" fill="#1C203F" />
                        </svg></span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
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