<section data-id="home-work" class="home-work">
    <div class=" home-work__container">
        <?php if ($home_work_header = get_field('home_work_header')) : ?>
            <h2 class="home-work__title"><?php echo $home_work_header; ?></h2>
        <?php endif; ?>
        <div class="home-work__items">
            <?php if (have_rows('home_work_items')) : ?>
                <?php while (have_rows('home_work_items')) :
                    the_row(); ?>
                    <?php
                    $link = get_sub_field('name');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>

                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="home-work__item <?php if (get_field('home_work_boxs_active_link')) : ?> home-work__item--active <?php endif; ?>">
                            <?php
                            $grafika = get_sub_field('grafika');
                            if ($grafika) : ?>
                                <div class="home-work__item__img">
                                    <img src="<?php echo esc_url($grafika['url']); ?>" alt="<?php echo esc_attr($grafika['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                            <span><?php echo $link_title; ?></span>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>