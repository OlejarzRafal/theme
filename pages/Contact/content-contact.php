<section data-id="contact-contact">
  <div class="contact__container">
    <h2 class="contact__title">Dane kontaktowe</h2>
    <div class="contact__main">
      <div class="contact__left">
        <h3 class="contact-title"><?php the_field('contact-title'); ?></h3>
        <div class="contact-list">
          <?php if( have_rows('contact-list') ): ?>
          <?php while( have_rows('contact-list') ): the_row(); 
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $title_type = get_sub_field('title-type');
                  ?>
          <div class="contact-item">
            <?php if($title_type == 'is_phone'): ?>
            <a href="tel:<?= $title; ?>" class="contact-item__title phone"><?= $title; ?></a>
            <?php elseif($title_type == 'is_email'): ?>
            <a href="mailto:<?= $title; ?>" class="contact-item__title email"><?= $title; ?></a>
            <?php else: ?>
            <p class="contact-item__title"><?= $title; ?></p>
            <?php endif; ?>

            <?php if($text): ?>
            <p class="contact-item__text"><?= $text; ?></p>
            <?php endif; ?>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="contact__right">
        <div class="contact__map">
          <?php the_field('contact-map'); ?>
        </div>
      </div>
    </div>
  </div>
</section>