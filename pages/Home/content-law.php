<section data-id="home-law" id="oferta">
    <div class="home-law__container">
        <div class="home-law__main">
            <div class="home-law__toggle" data-active="tab1">
                <div class="home-law__button active" data-tab="tab1">Prawo gospodarcze</div>
                <span></span>
                <div class="home-law__button" data-tab="tab2">Prawo bankowe</div>
            </div>
            <!-- ITEM 1 -->
            <div class="home-law__item law-item active" data-content="tab1">
                <?php if (have_rows('law_g')) : ?>
                    <?php while (have_rows('law_g')) :
                        the_row(); ?>
                        <?php
                        $photo = get_sub_field('photo'); ?>
                        <div class="law-item__left">
                            <h2 class="law-item__title">PRAWO GOSPODARCZE</h2>
                            <?php if ($header = get_sub_field('header')) : ?>
                                <h3 class="law-item__subtitle"><?php echo $header; ?></h3>
                            <?php endif; ?>
                            <?php if ($text = get_sub_field('text')) : ?>
                                <p class="law-item__text"><?php echo $text; ?></p>
                            <?php endif; ?>
                            <?php if ($photo) : ?>
                                <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="law-item__right">
                            <?php
                            $args = array(
                                'child_of' => 53,
                                'sort_column' => 'menu_order',
                                'order' => 'ASC',
                            );
                            $children_pages = get_pages($args);
                            if ($children_pages) {
                                foreach ($children_pages as $child_page) {
                                    $child_title = $child_page->post_title;
                                    $child_link = get_permalink($child_page->ID);
                                    echo
                                    '<a class="law-item__link" href="' . $child_link . '"><span>' . $child_title . '</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.6667 16C30.6667 7.89982 24.1002 1.33333 16 1.33333C7.89982 1.33333 1.33333 7.89982 1.33333 16C1.33333 24.1002 7.89982 30.6667 16 30.6667C24.1002 30.6667 30.6667 24.1002 30.6667 16ZM32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16ZM12.5125 20.5619L19.7652 13.3093L19.7652 21.2821L21.0985 21.2821V11.0331H10.8496V12.3665H18.8224L11.5697 19.6191L12.5125 20.5619Z" fill="#D96761" />
                                        </svg>
                                    </a>';
                                }
                            }
                            ?>
                        </div>
                        <?php if ($photo) : ?>
                            <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <!-- ITEM 2 -->
            <div class="home-law__item law-item" data-content="tab2">
                <?php if (have_rows('law_b')) : ?>
                    <?php while (have_rows('law_b')) :
                        the_row(); ?>
                        <?php
                        $photo = get_sub_field('photo'); ?>
                        <div class="law-item__left">
                            <h2 class="law-item__title">PRAWO BANKOWE</h2>
                            <?php if ($header = get_sub_field('header')) : ?>
                                <h3 class="law-item__subtitle"><?php echo $header; ?></h3>
                            <?php endif; ?>
                            <?php if ($text = get_sub_field('text')) : ?>
                                <p class="law-item__text"><?php echo $text; ?></p>
                            <?php endif; ?>
                            <?php if ($photo) : ?>
                                <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="law-item__right">
                            <?php
                            $args = array(
                                'child_of' => 57,
                                'sort_column' => 'menu_order',
                                'order' => 'ASC',
                            );
                            $children_pages = get_pages($args);
                            if ($children_pages) {
                                foreach ($children_pages as $child_page) {
                                    $child_title = $child_page->post_title;
                                    $child_link = get_permalink($child_page->ID);
                                    echo
                                    '<a class="law-item__link" href="' . $child_link . '"><span>' . $child_title . '</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.6667 16C30.6667 7.89982 24.1002 1.33333 16 1.33333C7.89982 1.33333 1.33333 7.89982 1.33333 16C1.33333 24.1002 7.89982 30.6667 16 30.6667C24.1002 30.6667 30.6667 24.1002 30.6667 16ZM32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16ZM12.5125 20.5619L19.7652 13.3093L19.7652 21.2821L21.0985 21.2821V11.0331H10.8496V12.3665H18.8224L11.5697 19.6191L12.5125 20.5619Z" fill="#D96761" />
                                        </svg>
                                    </a>';
                                }
                            }
                            ?>
                        </div>
                        <?php if ($photo) : ?>
                            <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>