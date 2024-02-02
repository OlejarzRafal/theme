<?php
/* Template Name: Zespół - osoba */
?>

<?php get_header(); ?>
<main data-id="team-person">
    <section class="team-person">

        <div class="team-person__container">
            <div class="team-person__left">
                <div class="team-person__breadcrumbs">
                    <?php theme_breadcrumbs('', '', '', true); ?>
                </div>
                <h1 class="team-person__title"><?php the_title(); ?></h1>
                <div class="team-person__infoWrap">
                    <?php if ($person_single_position = get_field('person_single_position')) : ?>
                        <div class="team-person__position"><?php echo $person_single_position; ?></div>
                    <?php endif; ?>
                    <?php if (have_rows('person_single_social')) : ?>
                        <div class="team-person__social">
                            <?php while (have_rows('person_single_social')) :
                                the_row(); ?>
                                <?php
                                $person_single_social_icon = get_sub_field('person_single_social_icon');
                                $link = get_sub_field('person_single_social_link');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <img src="<?php echo esc_url($person_single_social_icon['url']); ?>" alt="<?php echo esc_attr($person_single_social_icon['alt']); ?>" />
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="team-person__contactWrap">
                    <div class="team-person__contact">
                        <?php if ($person_single_email = get_field('person_single_email')) : ?>
                            <a href="mailto:<?php echo $person_single_email; ?>" class="team-person__email"><?php echo $person_single_email; ?></a>
                        <?php endif; ?>
                        <?php if ($person_single_phone = get_field('person_single_phone')) : ?>
                            <a href="tel:<?php echo $person_single_phone; ?>" class="team-person__phone"><?php echo $person_single_phone; ?></a>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="team-person__content default-content-style">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="team-person__right">
                <div class="team-person__image">
                    <?php
                    $person_single_photo = get_field('person_single_photo');
                    if ($person_single_photo) : ?>
                        <img src="<?php echo esc_url($person_single_photo['url']); ?>" alt="<?php echo esc_attr($person_single_photo['alt']); ?>" />
                        <div class="blur"><img src="<?php echo esc_url($person_single_photo['url']); ?>" role="presentation" alt="" loading="lazy" decoding="async" /></div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
</main>
<?php
get_footer();
