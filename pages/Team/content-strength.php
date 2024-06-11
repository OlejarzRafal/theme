<section data-id="team-strength" class="team-strength">
    <div class="team-strength__container">
        <?php if ($team_strength_title = get_field('team_strength_title')) : ?>
            <h2 class="team-strength__title"><?php echo esc_html($team_strength_title); ?></h2>
        <?php endif; ?>
        <div class="team-strength__box">
            <?php if (have_rows('team_strength_list')) : ?>
                <?php while (have_rows('team_strength_list')) :
                    the_row(); ?>
                    <?php if ($team_strength_list_title = get_sub_field('team_strength_list_title')) : ?>
                        <div class="team-strength__box__item">
                            <?php if ($team_strength_list_title = get_sub_field('team_strength_list_title')) : ?>
                                <div class="team-strength__box__item__title">
                                    <?php echo esc_html($team_strength_list_title); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($team_strength_list_text = get_sub_field('team_strength_list_text')) : ?>
                                <div class="team-strength__box__item__text">
                                    <?php echo esc_html($team_strength_list_text); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>