<section data-id="recommendations-reviews">
    <div class="recommendations-reviews__container">
        <h2 class="recommendations-reviews__title"><?php the_field('clients-title'); ?></h2>
        <div class="recommendations-reviews__list">
            <div class="recommendations-reviews__column">

                <?php if (have_rows('clients-list')) : ?>
                    <?php while (have_rows('clients-list')) : the_row();
                        $logo = get_sub_field('logo');
                        $company = get_sub_field('company');
                        $name = get_sub_field('name');
                        $description = get_sub_field('description');
                    ?>
                        <?php if (get_row_index() % 2 == 0) : ?>
                            <div class="recommendations-reviews__item">
                                <div class="recommendations-reviews__logo">
                                    <img src="<?= $logo['sizes']['large']; ?>" alt="<?= $logo['alt']; ?>" />
                                </div>
                                <div class="recommendations-reviews__content">
                                    <div class="recommendations-reviews__description"><?= $description; ?></div>
                                    <div class="recommendations-reviews__company"><?= $company; ?></div>
                                    <div class="recommendations-reviews__name"><?= $name; ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="recommendations-reviews__column">

                <?php if (have_rows('clients-list')) : ?>
                    <?php while (have_rows('clients-list')) : the_row();
                        $logo = get_sub_field('logo');
                        $company = get_sub_field('company');
                        $name = get_sub_field('name');
                        $description = get_sub_field('description');
                    ?>
                        <?php if (get_row_index() % 2 != 0) : ?>
                            <div class="recommendations-reviews__item">
                                <div class="recommendations-reviews__logo">
                                    <img src="<?= $logo['sizes']['large']; ?>" alt="<?= $logo['alt']; ?>" />
                                </div>
                                <div class="recommendations-reviews__content">
                                    <div class="recommendations-reviews__description"><?= $description; ?></div>
                                    <div class="recommendations-reviews__company"><?= $company; ?></div>
                                    <div class="recommendations-reviews__name"><?= $name; ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>