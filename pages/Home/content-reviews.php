<section data-id="home-reviews" class="home-reviews">
    <div class="home-reviews__container">
        <h2 class="home-reviews__title">Rekomendacje naszych Klientów</h2>
    </div>
    <div class="home-reviews__list">
        <div class="swiper-wrapper">
            <?php if (have_rows('home_recomendations_carosuel')) : ?>
                <?php while (have_rows('home_recomendations_carosuel')) :
                    the_row(); ?>
                    <div class="swiper-slide">
                        <div class="home-reviews__item ">
                            <?php
                            $logo = get_sub_field('logo');
                            if ($logo) : ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                            <?php endif; ?>
                            <?php if ($description = get_sub_field('description')) : ?>
                                <p class="home-reviews__text"><?php echo $description; ?></p>
                            <?php endif; ?>
                            <div>
                                <?php if ($name = get_sub_field('name')) : ?>
                                    <p class="home-reviews__author"><?php echo esc_html($name); ?></p>
                                <?php endif; ?>
                                <?php if ($company = get_sub_field('company')) : ?>
                                    <p class="home-reviews__company"><?php echo esc_html($company); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="home-reviews__pagination">
            <div class="swiper-pagination"></div>
        </div>
        <div class="home-reviews__scrollbar">
            <div class="swiper-scrollbar"></div>
        </div>
    </div>


</section>