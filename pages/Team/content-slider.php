<section data-id="team-slider" class="team-slider">

        <div class="swiper team-slide-swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'about_slider' ) ) : ?>
                    <?php while ( have_rows( 'about_slider' ) ) :
                        the_row(); ?>
                        <?php
                        $about_slider_photo = get_sub_field( 'about_slider_photo' );
                        if ( $about_slider_photo ) : ?>
                            <img class="swiper-slide" src="<?php echo esc_url( $about_slider_photo['url'] ); ?>" alt="<?php echo esc_attr( $about_slider_photo['alt'] ); ?>" />
                    <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination"></div>
           <div class="swiper-scrollbar"></div>
        </div>
          
</section>