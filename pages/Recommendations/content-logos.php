<section data-id="recommendation-logos">
  <div class="recommendation-logos__container">
    <h2 class="recommendation-logos__title"><?php the_field('trust-title', 'options'); ?></h2>
    <div class="recommendation-logos__list">
      <?php 
        $images = get_field('trust-logos', 'options');

        if( $images ): ?>
      <?php foreach( $images as $image ): ?>
      <div class="recommendation-logos__item">
        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>