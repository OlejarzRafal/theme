<section data-id="team-strength" class="team-strength">
        <div class="team-strength__container">
            <?php if ( $team_strength_title = get_field( 'team_strength_title' ) ) : ?>
                    <h2 class="team-strength__title"><?php echo esc_html( $team_strength_title ); ?></h2>
            <?php endif; ?>
            <div class="team-strength__box">
                <?php if ( have_rows( 'team_strength_list' ) ) : ?>
                    <?php while ( have_rows( 'team_strength_list' ) ) :
                        the_row(); ?>
                            <div class="team-strength__box__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.6291 26.3709C11.3568 32.0986 20.6432 32.0986 26.3709 26.3709C32.0986 20.6432 32.0986 11.3568 26.3709 5.6291C20.6432 -0.098588 11.3568 -0.098588 5.6291 5.6291C-0.0985889 11.3568 -0.0985885 20.6432 5.6291 26.3709ZM4.68629 27.3137C10.9347 33.5621 21.0653 33.5621 27.3137 27.3137C33.5621 21.0653 33.5621 10.9347 27.3137 4.68629C21.0653 -1.5621 10.9347 -1.5621 4.68629 4.68629C-1.5621 10.9347 -1.5621 21.0653 4.68629 27.3137Z" fill="#D96761"/>
                                </svg>
                                <?php if ( $team_strength_list_title = get_sub_field( 'team_strength_list_title' ) ) : ?>
                                        <div class="team-strength__box__item__title">
                                            <?php echo esc_html( $team_strength_list_title ); ?>
                                        </div>
                                <?php endif; ?>
                                <?php if ( $team_strength_list_text = get_sub_field( 'team_strength_list_text' ) ) : ?>
                                <div class="team-strength__box__item__text">
                                    <?php echo esc_html( $team_strength_list_text ); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
</section>