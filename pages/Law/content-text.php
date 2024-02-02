<section data-id="law-text" class="law-text">
    <div class="law-text__container">
        <div class="law-text__header-top">
            <?php if ($law_sec2_header = get_field('law_sec2_header')) : ?>
                <h2 class="law-text__header"><?php echo $law_sec2_header; ?></h2>
            <?php endif; ?>
            <?php if ($law_sec2_header2 = get_field('law_sec2_header2')) : ?>
                <p class="law-text__subheader"><?php echo $law_sec2_header2; ?></p>
            <?php endif; ?>
        </div>
        <div class="law-text__descWrap">
            <?php if ($law_sec2_text_left = get_field('law_sec2_text_left')) : ?>
                <div class="law-text__left"><?php echo $law_sec2_text_left; ?></div>
            <?php endif; ?>
            <?php if ($law_sec2_textright = get_field('law_sec2_textright')) : ?>
                <div class="law-text__right"><?php echo $law_sec2_textright; ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>