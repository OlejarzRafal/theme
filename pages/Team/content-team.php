<section class="team-secTeam team-secTeam-line">
    <?php if ($team_main_title = get_field('team_main_title')) : ?>
        <div class="team-secTeam__container">
            <h2 class="team-secTeam__title"><?php echo esc_html($team_main_title); ?></h2>
        </div>
    <?php endif; ?>
    <div class="team-secTeam__container">
        <?php if (have_rows('team_main_list')) : ?>
            <?php $x = 1; ?>
            <?php while (have_rows('team_main_list')) :
                the_row(); ?>

                <div class="team-secTeam__item-wrap">
                    <div class="team-secTeam__item-wrap__item">
                        <?php
                        $team_main_list_image = get_sub_field('team_main_list_image');
                        if ($team_main_list_image) : ?>
                            <img src="<?php echo esc_url($team_main_list_image['url']); ?>" alt="<?php echo esc_attr($team_main_list_image['alt']); ?>" />
                        <?php endif; ?>
                        <?php echo file_get_contents(get_template_directory() . '/assets/img/team-border-' . $x . '.svg'); ?>
                    </div>
                    <div class="team-secTeam__item-wrap__name-wrap">
                        <?php if ($team_main_list_name = get_sub_field('team_main_list_name')) : ?>
                            <div class="team-secTeam__item-wrap__name-wrap__name"><?php echo $team_main_list_name; ?></div>
                        <?php endif; ?>
                        <?php if ($team_main_list_position = get_sub_field('team_main_list_position')) : ?>
                            <div class="team-secTeam__item-wrap__name-wrap__position"><?php echo esc_html($team_main_list_position); ?></div>
                        <?php endif; ?>
                        <?php
                        if (($phone = get_sub_field('phone')) || ($email = get_sub_field('email'))) : ?>
                            <div class="team-secTeam__item-wrap__contact-wrap">
                                <?php if ($email = get_sub_field('email')) : ?>
                                    <a href="tel:<?php echo $email; ?>"><?php echo $email; ?></a>
                                <?php endif; ?>
                                <?php if ($phone = get_sub_field('phone')) : ?>
                                    <a href="mailto:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                                <?php endif; ?>

                            </div>
                        <?php endif; ?>
                        <?php if ($team_main_list_text = get_sub_field('team_main_list_text')) : ?>
                            <div class="team-secTeam__item-wrap__name-wrap__text">
                                <?php echo $team_main_list_text; ?>
                            </div>
                        <?php endif; ?>
                        <?php
                        $link = get_sub_field('team_main_list_link');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a class="button-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C24.0739 15.4824 24.0739 8.51759 19.7782 4.22182C15.4824 -0.0739429 8.51759 -0.0739426 4.22182 4.22182C-0.0739421 8.51759 -0.0739418 15.4824 4.22183 19.7782C8.51759 24.0739 15.4824 24.0739 19.7782 19.7782ZM20.4853 20.4853C25.1716 15.799 25.1716 8.20101 20.4853 3.51472C15.799 -1.17157 8.20101 -1.17157 3.51472 3.51472C-1.17157 8.20101 -1.17157 15.799 3.51472 20.4853C8.20101 25.1716 15.799 25.1716 20.4853 20.4853ZM7.73117 12.5698L15.4237 12.5698L11.1955 16.798L11.9026 17.5051L17.338 12.0698L11.9026 6.63448L11.1955 7.34159L15.4238 11.5698L7.73117 11.5698L7.73117 12.5698Z" fill="#1C203F" />
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $x = ($x % 4) + 1; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>