<section data-id="law-offerBox" class="law-offerBox">
    <div class="law-offerBox__container">
        <div class="law-items">
            <?php if (have_rows('law_sec3_boxs')) : ?>
                <?php while (have_rows('law_sec3_boxs')) :
                    the_row(); ?>
                    <?php
                    $link = get_sub_field('link');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="law-items__item">
                            <div class="law-items__desc">
                                <?php if ($header = get_sub_field('header')) : ?>
                                    <h3><?php echo $header; ?></h3>
                                <?php endif; ?>
                                <?php if ($text = get_sub_field('text')) : ?>
                                    <p><?php echo $text; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="button-link law-items__btn">
                                <!-- <?php echo esc_html($link_title); ?> -->
                                Więcej informacji
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2782 19.7782C24.5739 15.4824 24.5739 8.51759 20.2782 4.22182C15.9824 -0.0739429 9.01759 -0.0739426 4.72182 4.22182C0.426058 8.51759 0.426058 15.4824 4.72183 19.7782C9.01759 24.0739 15.9824 24.0739 20.2782 19.7782ZM20.9853 20.4853C25.6716 15.799 25.6716 8.20101 20.9853 3.51472C16.299 -1.17157 8.70101 -1.17157 4.01472 3.51472C-0.671574 8.20101 -0.671573 15.799 4.01472 20.4853C8.70101 25.1716 16.299 25.1716 20.9853 20.4853ZM8.23117 12.5698L15.9237 12.5698L11.6955 16.798L12.4026 17.5051L17.838 12.0698L12.4026 6.63448L11.6955 7.34159L15.9238 11.5698L8.23117 11.5698L8.23117 12.5698Z" fill="#1C203F" />
                                </svg>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>