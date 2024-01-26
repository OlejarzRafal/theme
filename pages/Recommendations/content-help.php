<section data-id="recommendations-help">
    <div class="recommendations-help__container">
        <div class="recommendations-help__left">
            <h3 class="recommendations-help__title"><?php the_field('help-title', 59); ?></h3>
            <h4 class="recommendations-help__subtitle"><?php the_field('help-subtitle', 59); ?></h4>
        </div>
        <?php
        $image = get_field('help-image', 59);
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async" />
        <?php endif; ?>
        <div class="recommendations-help__right">
            <p class="recommendations-help__text"><?php the_field('help-text', 59); ?></p>
            <div class="recommendations-help__actions">
                <?php $link = get_field('help-offer', 59); ?>
                <a href="<?= $link['url']; ?>" class="recommendations-help__link"><?= $link['title']; ?></a>
                <span>lub</span>
                <?php $link = get_field('help-contact', 59); ?>
                <a href="<?= $link['url']; ?>" class="recommendations-help__link"><?= $link['title']; ?></a>
            </div>
        </div>
    </div>
    <div class="recommendations-help__image">
        <?php
        $image = get_field('help-image', 59);
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async" />
        <?php endif; ?>

    </div>
</section>