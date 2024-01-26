<span class="header-mobile--placeholder"></span>
<div class="header-mobile">
  <div class="header-mobile__wrapper">
    <div class="header-mobile__top">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main',
          'container' => 'ul',
          'menu_class' => 'header-mobile__list'
        ));
      ?>
      <a href="/kontakt">Skontaktuj się z nami</a>
    </div>
    <div class="header-mobile__contact">
      <div class="header-mobile__title">Kontakt</div>
      <div class="header-mobile__list">
        <div class="header-item time">
          <p class="bold"><?php the_field('h-hour', 'options'); ?></p>
          <p class="regular"><?php the_field('h-hour-text', 'options'); ?></p>
        </div>
        <div class="header-item phone">
          <a href="tel:<?= get_field('h-phone-1', 'options'); ?>"
            class="bold"><?php the_field('h-phone-1', 'options'); ?></a>
          <a href="tel:<?= get_field('h-phone-2', 'options'); ?>"
            class="bold"><?php the_field('h-phone-2', 'options'); ?></a>
        </div>
        <div class="header-item email">
          <a href="mailto:<?= get_field('h-email', 'options'); ?>"
            class="bold"><?php the_field('h-email', 'options'); ?></a>
          <p class="regular"><?php the_field('h-email-text', 'options'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>