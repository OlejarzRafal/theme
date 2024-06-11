<section class="team-media">
    <div class="c-blog">
        <div class="c-blog__container">
            <div class="c-blog-top">
                <div class="c-blog-top__left">
                    <?php if ($media_header = get_field('media_header')) : ?>
                        <p class="c-blog-top__title"><?php echo esc_html($media_header); ?></p>
                    <?php endif; ?>
                    <?php if ($media_text = get_field('media_text')) : ?>
                        <p class="c-blog-top__text"><?php echo esc_html($media_text); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="c-blog-list">
                <div class="swiper-wrapper">
                    <?php $x = 1; ?>
                    <?php if (have_rows('boxy')) : ?>
                        <?php while (have_rows('boxy')) :
                            the_row(); ?>
                            <div class="swiper-slide">
                                <?php
                                $link = get_sub_field('link');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?> class=" c-blog-list__item blog-item">
                                        <div class="blog-item__image">
                                            <?php
                                            $photo = get_sub_field('photo');
                                            if ($photo) : ?>
                                                <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <?php if ($header = get_sub_field('header')) : ?>
                                            <div class="blog-item__title"><?php echo esc_html($header); ?></div>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <?php $x++ ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>


                <div class="c-blog__footer">
                    <?php if ($x > 4) : ?>
                        <div class="c-blog__controls">
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                    <path d="M23.0256 10.025L3.73207 10.0254L11.9754 1.78223L10.5968 0.403664L7.86365e-05 11.0003L10.5968 21.5968L11.9754 20.2183L3.73202 11.975L23.0256 11.9745L23.0256 10.025Z" fill="#A7A7A7" />
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                                    <path d="M0.974368 11.975L20.2679 11.9746L12.0246 20.2178L13.4032 21.5963L23.9999 10.9997L13.4032 0.403155L12.0246 1.78172L20.268 10.025L0.974368 10.0255L0.974368 11.975Z" fill="#FDEFEF" />
                                </svg>
                            </div>
                        </div>

                        <div class="c-blog__pagination">
                            <div class="swiper-pagination"></div>
                        </div>
                    <?php endif; ?>

                    <div class="c-blog__scrollbar">
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>