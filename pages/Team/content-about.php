<section data-id="team-about" class="team-about">
    <div class="team-about__container">
        <div class="team-about__left">
            <?php
                $about_images_back = get_field( 'about_images_back' );
                if ( $about_images_back ) : ?>
                    <img class="team-about__left__photo1" src="<?php echo esc_url( $about_images_back['url'] ); ?>" alt="<?php echo esc_attr( $about_images_back['alt'] ); ?>" />
            <?php endif; ?>
            <?php
                $about_images_front = get_field( 'about_images_front' );
                if ( $about_images_front ) : ?>
                    <img class="team-about__left__photo2" src="<?php echo esc_url( $about_images_front['url'] ); ?>" alt="<?php echo esc_attr( $about_images_front['alt'] ); ?>" />
            <?php endif; ?>
        </div>
        <div class="team-about__right">
            <?php if ( $about_title = get_field( 'about_title' ) ) : ?>
                <h2 class="team-about__right__title"><?php echo esc_html( $about_title ); ?></h2>
            <?php endif; ?>
            <?php if ( $about_text = get_field( 'about_text' ) ) : ?>
                <div class="team-about__right__text"><?php echo $about_text; ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>