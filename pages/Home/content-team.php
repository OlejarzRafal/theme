<section data-id="home-team" class="home-team">
    <div class="home-team__container">
        <div class="home-team__top">
            <?php if ($home_team_header = get_field('home_team_header')) : ?>
                <h2 class="home-team__title"><?php echo $home_team_header; ?></h2>
            <?php endif; ?>
            <?php if ($home_team_text = get_field('home_team_text')) : ?>
                <p class="home-team__desc"><?php echo $home_team_text; ?></p>
            <?php endif; ?>
        </div>
        <div class="home-team__main">
            <div class="home-team__items swiper-wrapper">
                <?php if (have_rows('home_person_carosuel')) : ?>
                    <?php $x = 1; ?>
                    <?php while (have_rows('home_person_carosuel')) : the_row(); ?>
                        <?php
                        $link = get_sub_field('link');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a href="<?php echo esc_url($link_url); ?>" class="home-team__item-wrap swiper-slide">
                                <div class="home-team__item">
                                    <?php
                                    $photo = get_sub_field('photo');
                                    if ($photo) : ?>
                                        <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                                    <?php endif; ?>
                                    <?php echo file_get_contents(get_template_directory() . '/assets/img/team-border-' . $x . '.svg'); ?>
                                </div>
                                <div class="home-team__item__name-wrap">
                                    <?php if ($name = get_sub_field('name')) : ?>
                                        <span class="home-team__item__name"><?php echo esc_html($name); ?></span>
                                    <?php endif; ?>
                                    <?php if ($surname = get_sub_field('surname')) : ?>
                                        <span class="home-team__item__surname"><?php echo esc_html($surname); ?></span>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php endif; ?>


                        <?php $x = ($x % 4) + 1; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="home-team__scrollbar">
                <div class="swiper-scrollbar"></div>
            </div>
        </div>

</section>