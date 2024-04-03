<section data-id="recommendations-help">
    <div class="recommendations-help__container">
        <div class="recommendations-help__left">
            <h3 class="recommendations-help__title"><?php the_field('help-title', 'options'); ?></h3>
            <h4 class="recommendations-help__subtitle"><?php the_field('help-subtitle', 'options'); ?></h4>
        </div>
        <?php
        $image = get_field('help-image', 'options');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async" />
        <?php endif; ?>
        <div class="recommendations-help__right">
            <p class="recommendations-help__text"><?php the_field('help-text', 'options'); ?></p>
            <div class="recommendations-help__actions">
                <?php
                $link = get_field('help-offer', 'options');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="recommendations-help__link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
                <?php if ($help_separator_buttons = get_field('help_separator_buttons', 'options')) : ?>
                    <span><?php echo $help_separator_buttons; ?></span>
                <?php endif; ?>
                <?php
                $link2 = get_field('help-contact', 'options');
                if ($link2) :
                    $link_url2 = $link2['url'];
                    $link_title2 = $link2['title'];
                    $link_target2 = $link2['target'] ? $link2['target'] : '_self';
                ?>
                    <a class="recommendations-help__link" href="<?php echo esc_url($link_url2); ?>" target="<?php echo esc_attr($link_target2); ?>"><?php echo esc_html($link_title2); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="recommendations-help__image">
        <?php
        $image = get_field('help-image', 'options');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async" />
        <?php endif; ?>

    </div>
</section>