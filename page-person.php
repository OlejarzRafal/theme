<?php
/* Template Name: zespół osoba */
?>

<?php get_header(); ?>
<main data-id="team-person">
    <section class="team-person">
        <?php 
            get_template_part('components/content', 'hero');
        ?>
        <div class="team-person__container">
            <div class="team-person__left">
                <div class="team-person__left__top">
                    <?php if ( $person_single_position = get_field( 'person_single_position' ) ) : ?>
                        <h2 class="team-person__left__top__title"><?php echo esc_html( $person_single_position ); ?></h2>
                    <?php endif; ?>
                    <div class="team-person__left__top__social">
                        <?php if ( have_rows( 'person_single_social' ) ) : ?>
                            <?php while ( have_rows( 'person_single_social' ) ) :
                                the_row(); ?>
                                <?php
                                $link = get_sub_field( 'person_single_social_link' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php
                                    $person_single_social_icon = get_sub_field( 'person_single_social_icon' );
                                    if ( $person_single_social_icon ) : ?>
                                        <img src="<?php echo esc_url( $person_single_social_icon['url'] ); ?>" alt="<?php echo esc_attr( $person_single_social_icon['alt'] ); ?>" />
                                    <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ( $person_single_contact = get_field( 'person_single_contact' ) ) : ?>
                    <div class="team-person__left__contact">
                        <?php echo $person_single_contact; ?>
                    </div>
                <?php endif; ?>
                <div class="mobille-photo">
                <?php
                    $person_single_photo = get_field( 'person_single_photo' );
                    if ( $person_single_photo ) : ?>
                        <img src="<?php echo esc_url( $person_single_photo['url'] ); ?>" alt="<?php echo esc_attr( $person_single_photo['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
                <?php if ( $person_single_text = get_field( 'person_single_text' ) ) : ?>
                         <div class="team-person__left__text">
                            <?php echo $person_single_text; ?>
                        </div>
                <?php endif; ?>
            </div>
            <div class="team-person__right">
                <?php
                $person_single_photo = get_field( 'person_single_photo' );
                if ( $person_single_photo ) : ?>
                    <img src="<?php echo esc_url( $person_single_photo['url'] ); ?>" alt="<?php echo esc_attr( $person_single_photo['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
