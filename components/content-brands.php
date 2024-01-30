<section data-id="contents-brands" class="contents-brands">
    <div class="contents-brands__container">
        <div class="contents-brands__left">
            <?php if ($brand_title = get_field('brand_title', 'option')) : ?>
                <h2 class="contents-brands__left__title"><?php echo esc_html($brand_title); ?></h2>
            <?php endif; ?>
            <?php if ($brand_text = get_field('brand_text', 'option')) : ?>
                <div class="contents-brands__left__text"><?php echo esc_html($brand_text); ?></div>
            <?php endif; ?>
            <?php
            $link = get_field('brand_button', 'option');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="button-border" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C24.0739 15.4824 24.0739 8.51759 19.7782 4.22182C15.4824 -0.0739429 8.51759 -0.0739426 4.22182 4.22182C-0.0739421 8.51759 -0.0739418 15.4824 4.22183 19.7782C8.51759 24.0739 15.4824 24.0739 19.7782 19.7782ZM20.4853 20.4853C25.1716 15.799 25.1716 8.20101 20.4853 3.51472C15.799 -1.17157 8.20101 -1.17157 3.51472 3.51472C-1.17157 8.20101 -1.17157 15.799 3.51472 20.4853C8.20101 25.1716 15.799 25.1716 20.4853 20.4853ZM7.73117 12.5698L15.4237 12.5698L11.1955 16.798L11.9026 17.5051L17.338 12.0698L11.9026 6.63448L11.1955 7.34159L15.4238 11.5698L7.73117 11.5698L7.73117 12.5698Z" fill="#484C58" />
                    </svg></a>
            <?php endif; ?>
        </div>
        <div class="contents-brands__right">
            <?php
            $images = get_field('brand_gallery_logos', 'option');

            if ($images) : ?>
                <?php foreach ($images as $image) : ?>
                    <div class="contents-brands__right__item">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>