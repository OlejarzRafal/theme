<footer data-id="footer">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer.svg" role="presentation" loading="lazy" decoding="async" alt="">

    <div class="footer__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-shape.png" role="presentation" loading="lazy" decoding="async" alt="" class="shape">
        <div class="footer__container">
            <div class="footer-top">
                <div class="footer-top__left">
                    <?php if ($footer_header_o = get_field('footer_header_o', 'options')) : ?>
                        <p class="footer-top__subtitle"><?php echo $footer_header_o; ?></p>
                    <?php endif; ?>
                    <?php if ($footer_header2_o = get_field('footer_header2_o', 'options')) : ?>
                        <p class="footer-top__title"><?php echo $footer_header2_o; ?></p>
                    <?php endif; ?>
                </div>
                <div class="footer-top__right">
                    <?php
                    $link = get_field('footer_link_o', 'options');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                        <a class="footer-top__contact" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.3333 20C38.3333 9.87478 30.1252 1.66667 20 1.66667C9.87478 1.66667 1.66667 9.87478 1.66667 20C1.66667 30.1252 9.87478 38.3333 20 38.3333C30.1252 38.3333 38.3333 30.1252 38.3333 20ZM40 20C40 8.95431 31.0457 0 20 0C8.9543 0 0 8.95431 0 20C0 31.0457 8.9543 40 20 40C31.0457 40 40 31.0457 40 20ZM15.6407 25.7024L24.7064 16.6366L24.7064 26.6026L26.3731 26.6026V13.7914H13.5619V15.4581H23.528L14.4622 24.5239L15.6407 25.7024Z" fill="#D96761" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-main">
                <div class="footer-main__left">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => 'ul',
                        'menu_class' => 'footer-main__list'
                    ));
                    ?>
                    <div class="google-reviews">
                        <?php
                        $shortcode_output = do_shortcode('[trustindex no-registration=google]');
                        echo $shortcode_output;
                        ?>
                    </div>
                </div>
                <div class="footer-main__right">
                    <div class="footer-main__list-contact">
                        <?php if (have_rows('contact-list-1', 'options')) : ?>
                            <?php while (have_rows('contact-list-1', 'options')) : the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $title_type = get_sub_field('title-type');
                            ?>
                                <div class="contact-item">
                                    <?php if ($title_type == 'is_phone') : ?>
                                        <a href="tel:<?= $title; ?>" class="contact-item__title phone"><?= $title; ?></a>
                                    <?php elseif ($title_type == 'is_email') : ?>
                                        <a href="mailto:<?= $title; ?>" class="contact-item__title email"><?= $title; ?></a>
                                    <?php else : ?>
                                        <p class="contact-item__title"><?= $title; ?></p>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>
                                        <p class="contact-item__text"><?= $text; ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="footer-main__list-contact">
                        <?php if (have_rows('contact-list-2', 'options')) : ?>
                            <?php while (have_rows('contact-list-2', 'options')) : the_row();
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                $title_type = get_sub_field('title-type');
                            ?>
                                <div class="contact-item">
                                    <?php if ($title_type == 'is_phone') : ?>
                                        <a href="tel:<?= $title; ?>" class="contact-item__title phone"><?= $title; ?></a>
                                    <?php elseif ($title_type == 'is_email') : ?>
                                        <a href="mailto:<?= $title; ?>" class="contact-item__title email"><?= $title; ?></a>
                                    <?php else : ?>
                                        <p class="contact-item__title"><?= $title; ?></p>
                                    <?php endif; ?>

                                    <?php if ($text) : ?>
                                        <p class="contact-item__text"><?= $text; ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <?php if ($footer_clause_o = get_field('footer_clause_o', 'options')) : ?>
                    <div class="footer-bottom__left"><?php echo $footer_clause_o; ?></div>
                <?php endif; ?>
                <div class="footer-bottom__right">
                    <a href="<?php the_field('linkedin', 'options'); ?>" target="_blank" rel="nofollow noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.15128 4.73201C3.33921 4.73201 4.30589 3.76146 4.3046 2.57116C4.30341 1.39809 3.33318 0.430766 2.15592 0.429688C0.970137 0.428612 -0.00386637 1.40456 1.15397e-05 2.58947C0.00378173 3.76146 0.978644 4.73309 2.15128 4.73201ZM9.91339 7.98931C10.0019 7.89004 10.0849 7.79009 10.1666 7.69168C10.3145 7.51353 10.4581 7.34046 10.6227 7.18572C11.4081 6.44569 12.3373 6.0719 13.4223 6.08052C14.0183 6.0859 14.6077 6.12899 15.1825 6.29488C16.4972 6.67513 17.2613 7.57998 17.6256 8.86507C17.8988 9.82809 17.9493 10.817 17.951 11.8091C17.9527 12.814 17.9514 13.8193 17.95 14.8245C17.9486 15.9117 17.9471 16.999 17.9495 18.0859C17.9499 18.2819 17.895 18.3336 17.7022 18.3315C16.6242 18.3229 15.5462 18.3229 14.4682 18.3315C14.2785 18.3336 14.2376 18.2744 14.2382 18.0956C14.2442 16.1049 14.2458 14.1132 14.2393 12.1225C14.2377 11.6238 14.2059 11.125 14.0659 10.6403C13.8081 9.74622 13.1684 9.29057 12.2322 9.34012C10.954 9.40798 10.2892 10.0403 10.1261 11.3405C10.0873 11.6507 10.0688 11.962 10.0692 12.2744C10.0697 12.9072 10.0696 13.5398 10.0696 14.1724C10.0695 15.4761 10.0695 16.7797 10.0743 18.0837C10.075 18.2765 10.0266 18.3336 9.82937 18.3315C8.74366 18.3218 7.65775 18.3239 6.57204 18.3315C6.39786 18.3326 6.34766 18.2852 6.34787 18.1096C6.35261 14.2758 6.35283 10.4421 6.34766 6.60834C6.34733 6.41876 6.4096 6.37459 6.58895 6.37567C7.62004 6.38429 8.65124 6.38429 9.68223 6.37567C9.87203 6.37352 9.92104 6.43492 9.91684 6.61481C9.90931 6.94127 9.91077 7.26827 9.91222 7.59504V7.59516C9.91281 7.7266 9.91339 7.858 9.91339 7.98931ZM4.00729 13.6629V13.663C4.00673 15.1286 4.00616 16.5946 4.01215 18.0599C4.01291 18.2711 3.96055 18.3346 3.74231 18.3325C2.6649 18.3206 1.58716 18.3238 0.509643 18.3314C0.336968 18.3325 0.284941 18.2894 0.285157 18.1106C0.290327 14.2704 0.290003 10.4302 0.286125 6.59102C0.286017 6.4316 0.324473 6.37558 0.493269 6.37666C1.58641 6.38312 2.67966 6.38528 3.7728 6.3745C3.98274 6.37235 4.01129 6.45422 4.01086 6.63411C4.00673 8.12887 4.00708 9.62364 4.00743 11.1189V11.119L4.00762 12.3713C4.00762 12.8017 4.00746 13.2323 4.00729 13.6629Z" fill="#141B47" />
                        </svg></a>
                    <a href="<?php the_field('facebook', 'options'); ?>" target="_blank" rel="nofollow noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                            <path d="M10.8729 11.2429L11.4227 7.62549H7.98198V5.27797C7.98198 4.2884 8.46204 3.32375 10.0037 3.32375H11.5683V0.24472C11.5683 0.24472 10.1484 0 8.79121 0C5.95673 0 4.10353 1.73263 4.10353 4.86861V7.62549H0.953125V11.2429H4.10353V20.6099C4.73538 20.7096 5.38312 20.7621 6.04233 20.7621C6.70241 20.7621 7.35013 20.7096 7.98198 20.6099V11.2429H10.8729Z" fill="#141B47" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>