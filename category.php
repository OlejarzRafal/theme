<?php get_header(); ?>
<main data-id="blog">
    <?php
    get_template_part('components/content', 'hero-single'); ?>
    <section data-id="news-list">
        <div class="news-list__container">
            <div class="news-list__main">
                <?php
                // Ustalenie bieżącej strony
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $posts_per_page = 9;
                // Parametry zapytania
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' =>  $posts_per_page,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'status' => 'public',
                    'paged' => $paged,
                    'cat' => get_query_var('cat')
                );
                $query = new WP_Query($args);

                // Sprawdzenie czy są dostępne posty
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <a href="<?php the_permalink(); ?>" class="news-list__item news-item">
                            <div class="news-item__image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plug.jpg">
                                <?php endif; ?>
                            </div>
                            <div class="news-item__contentWrap">
                                <div class="news-item__data">
                                    <div class="news-item__data__author"><?php echo get_the_author(); ?></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="5" viewBox="0 0 4 5" fill="none">
                                        <circle cx="2" cy="2.5" r="2" fill="#484C58" />
                                    </svg>
                                    <span class="news-item__data__date"><?php the_date('d.m.Y'); ?></span>
                                </div>
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
                            </div>
                        </a>
                <?php
                    endwhile;
                    // Resetowanie zapytania po zakończeniu pętli
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <!-- Paginacja -->
            <div class="news-list__pagination">
                <ul class="pagination__list">
                    <li class="pagination__item">
                        <?php if ($paged > 1) : ?>
                            <a href="<?php echo previous_posts($query->max_num_pages, false); ?>" class="page-link prev active">
                            <?php else : ?>
                                <a class="page-link prev">
                                <?php endif; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M23.0256 12.975L3.73207 12.9746L11.9754 21.2178L10.5968 22.5963L7.7625e-05 11.9997L10.5968 1.40315L11.9754 2.78172L3.73202 11.025L23.0256 11.0255L23.0256 12.975Z" fill="#B5ADB7"></path>
                                </svg>
                                </a>
                    </li>
                    <?php
                    // Paginacja
                    $max_pages_to_show = 2; // Maksymalna liczba numerowanych stron przed kropkami
                    $current_page = max(1, $paged - floor($max_pages_to_show / 2));
                    $end_page = min($query->max_num_pages, $current_page + $max_pages_to_show - 1);

                    if ($current_page > 1) {
                        echo '<li class="pagination__item"><a href="' . esc_url(get_pagenum_link(1)) . '" class="pagination__link">1</a></li>';
                        if ($current_page > 2) {
                            echo '<li class="pagination__item">...</li>';
                        }
                    }

                    for ($i = $current_page; $i <= $end_page; $i++) {
                        echo '<li class="pagination__item' . (($i == $paged) ? ' active' : '') . '"><a href="' . esc_url(get_pagenum_link($i)) . '" class="pagination__link">' . $i . '</a></li>';
                    }

                    if ($end_page < $query->max_num_pages) {
                        echo '<li class="pagination__item">...</li>';
                        echo '<li class="pagination__item"><a href="' . esc_url(get_pagenum_link($query->max_num_pages)) . '" class="pagination__link">' . $query->max_num_pages . '</a></li>';
                    }
                    ?>
                    <li class="pagination__item">
                        <?php if ($paged < $query->max_num_pages) : ?>
                            <a href="<?php echo next_posts($query->max_num_pages, false); ?>" class="page-link next active">
                            <?php else : ?>
                                <a class="page-link next">
                                <?php endif; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M0.974368 12.975L20.2679 12.9746L12.0246 21.2178L13.4032 22.5963L23.9999 11.9997L13.4032 1.40315L12.0246 2.78172L20.268 11.025L0.974368 11.0255Z" fill="#B5ADB7"></path>
                                </svg>
                                </a>
                    </li>
                </ul>
            </div>
            <!-- Koniec paginacji -->

        </div>
    </section>

    <div class="cateogry-desc">
        <div class="cateogry-desc__container">
            <div class="text-show-more">
            <?php
// Pobierz obiekt kategorii aktualnie wyświetlanej strony
$current_category = get_queried_object();

// Sprawdź, czy kategoria istnieje i czy jest zdefiniowany identyfikator
if ($current_category && isset($current_category->term_id)) {
    // Pobierz pole ACF dla aktualnie wyświetlanej kategorii
    $custom_text_seo = get_field('custom_text_seo', 'category_' . $current_category->term_id);
    $custom_text_seo_limit = get_field('custom_text_seo_limit', 'category_' . $current_category->term_id);

    // Sprawdź, czy pole ACF istnieje dla aktualnej kategorii
    if ($custom_text_seo !== false && $custom_text_seo !== '') {
        // Jeśli limit jest ustawiony, skróć tekst
        if ($custom_text_seo_limit !== false && $custom_text_seo_limit !== '') {
            $maxLength = intval($custom_text_seo_limit);
            if (strlen($custom_text_seo) > $maxLength) {
                $shortenedText = substr($custom_text_seo, 0, $maxLength) . '...';
                echo '<div class="short-text">' . $shortenedText . '</div>';
                echo '<div class="full-text" style="display:none;">' . $custom_text_seo . '</div>';
                echo '
                    <div class="button-link button-link__zero show-more-btn">
                        Czytaj dalej
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2782 19.7782C24.5739 15.4824 24.5739 8.51759 20.2782 4.22182C15.9824 -0.0739429 9.01759 -0.0739426 4.72182 4.22182C0.426058 8.51759 0.426058 15.4824 4.72183 19.7782C9.01759 24.0739 15.9824 24.0739 20.2782 19.7782ZM20.9853 20.4853C25.6716 15.799 25.6716 8.20101 20.9853 3.51472C16.299 -1.17157 8.70101 -1.17157 4.01472 3.51472C-0.671574 8.20101 -0.671573 15.799 4.01472 20.4853C8.70101 25.1716 16.299 25.1716 20.9853 20.4853ZM8.23117 12.5698L15.9237 12.5698L11.6955 16.798L12.4026 17.5051L17.838 12.0698L12.4026 6.63448L11.6955 7.34159L15.9238 11.5698L8.23117 11.5698L8.23117 12.5698Z" fill="#1C203F"></path>
                        </svg>
                    </div>';
            } else {
                echo '<div class="short-text">' . $custom_text_seo . '</div>';
            }
        } else {
            // Jeśli limit nie jest ustawiony, wyświetl pełny tekst tylko raz
            echo '<div class="short-text">' . $custom_text_seo . '</div>';
        }
    }
}
?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>