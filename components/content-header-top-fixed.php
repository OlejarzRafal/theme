<div class="header__top header-fixed">
    <div class="header-fixed__container">
        <a href="<?= get_home_url(); ?>" class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sticky.svg" alt="logo">
        </a>
        <div class="header-main">
            <div class="header-main__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main',
                    'container' => 'ul',
                    'menu_class' => 'header-main__list'
                ));
                ?>
            </div>
            <div class="header-main__contact">
                <a href="/kontakt">Skontaktuj się z nami</a>
            </div>
        </div>
        <div class="burger">
            <div class="burger__item"></div>
        </div>
    </div>
</div>