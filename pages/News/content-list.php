<section data-id="news-list">
    <div class="news-list__container">
        <div class="news-list__main">
            <?php
            $args = array(
                'post_type' => 'aktualnosci_cpt',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="news-list__item news-item">
                        <div class="news-item__image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plug.jpg">
                            <?php endif; ?>
                        </div>

                        <span class="news-item__date"><?php the_date('d.m.Y'); ?></span>
                        <h3 class="news-item__title"><?php the_title(); ?></h3>
                        <?php
                        if (has_excerpt()) {
                            echo '<p class="news-item__text">' . get_the_excerpt() . '</p>';
                        } else {
                            $content = get_the_content();
                            $content = strip_tags($content);
                            $excerpt = substr($content, 0, 115);
                            echo '<p class="news-item__text">' . $excerpt . '...</p>';
                        }
                        ?>
                        <div class="news-item__button">
                            Przeczytaj więcej
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5282 19.7818C24.8239 15.486 24.8239 8.52119 20.5282 4.22542C16.2324 -0.0703418 9.26759 -0.0703415 4.97182 4.22543C0.676058 8.52119 0.676058 15.486 4.97183 19.7818C9.26759 24.0775 16.2324 24.0775 20.5282 19.7818ZM21.2353 20.4889C25.9216 15.8026 25.9216 8.20461 21.2353 3.51832C16.549 -1.16797 8.95101 -1.16797 4.26472 3.51832C-0.421574 8.20461 -0.421573 15.8026 4.26472 20.4889C8.95101 25.1752 16.549 25.1752 21.2353 20.4889ZM8.48117 12.5734L16.1737 12.5734L11.9455 16.8016L12.6526 17.5087L18.088 12.0734L12.6526 6.63809L11.9455 7.34519L16.1738 11.5734L8.48117 11.5734L8.48117 12.5734Z" fill="#1C203F" />
                            </svg>
                        </div>
                    </a>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>

        </div>
        <div class="news-list__pagination"></div>
    </div>
</section>