<div class="home-logotype">
    <div class="home-logotype__container">
        <div class="home-logotype__swiper">
            <div class="swiper-wrapper">
                <?php
                $images = get_field('home_logotype_carosuel');

                if ($images) : ?>
                    <?php foreach ($images as $image) : ?>
                        <div class="home-logotype__item swiper-slide">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>