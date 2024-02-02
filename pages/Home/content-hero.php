<section data-id="home-hero">
    <div class="home-hero__container">
        <div class="home-hero__left">
            <div class="home-hero__content">
                <?php if ($home_hero_header = get_field('home_hero_header')) : ?>
                    <h1><?php echo $home_hero_header; ?></h1>
                <?php endif; ?>
                <?php if ($home_hero_text = get_field('home_hero_text')) : ?>
                    <p><?php echo $home_hero_text; ?></p>
                <?php endif; ?>
            </div>
            <?php
            $link = get_field('home_hero_link');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="home-hero__link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <?php echo esc_html($link_title); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22183 20.5619C8.51759 24.8576 15.4824 24.8576 19.7782 20.5619C24.0739 16.2661 24.0739 9.30128 19.7782 5.00552C15.4824 0.70975 8.51759 0.70975 4.22183 5.00552C-0.0739423 9.30128 -0.0739411 16.2661 4.22183 20.5619ZM3.51472 21.269C8.20101 25.9553 15.799 25.9553 20.4853 21.269C25.1716 16.5827 25.1716 8.9847 20.4853 4.29841C15.799 -0.387882 8.20101 -0.387882 3.51472 4.29841C-1.17157 8.9847 -1.17157 16.5827 3.51472 21.269ZM11.4302 8.51486L11.4302 16.2074L7.20198 11.9792L6.49488 12.6863L11.9302 18.1217L17.3655 12.6863L16.6584 11.9792L12.4302 16.2075V8.51486H11.4302Z" fill="#F4E7E7" />
                    </svg>
                </a>
            <?php endif; ?>
        </div>
        <div class="home-hero__right">
            <?php
            $home_hero_photo = get_field('home_hero_photo');
            if ($home_hero_photo) : ?>
                <img src="<?php echo esc_url($home_hero_photo['url']); ?>" alt="<?php echo esc_attr($home_hero_photo['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>