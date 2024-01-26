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