<div class="home-logotype">
    <div class="home-logotype__container">
        <div class="home-logotype__swiper">
            <div class="swiper-wrapper">
                <?php if (have_rows('home_logotype_carosuel')) : ?>
                    <?php while (have_rows('home_logotype_carosuel')) :
                        the_row(); ?>
                        <div class="home-logotype__item swiper-slide">
                            <?php
                            $logo = get_sub_field('logo');
                            if ($logo) : ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>