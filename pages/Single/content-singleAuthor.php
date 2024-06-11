<div class="post-author-box">
    <div class="post-author__title">Autor</div>
    <?php
    $current_post = get_post();
    $author_id = $current_post->post_author;

    $author_data = get_userdata($author_id);

    if ($author_data) :
        $author_name = $author_data->first_name;
        $author_surname = $author_data->last_name;
        $post_autor_email = get_field('post_autor_email', 'user_' . $author_id);
        $post_autor_phone = get_field('post_autor_phone', 'user_' . $author_id);
        $post_autor_link = get_field('post_autor_link', 'user_' . $author_id);
        $post_autor_desc = get_field('post_autor_desc', 'user_' . $author_id);
        $post_autor_position = get_field('post_autor_position', 'user_' . $author_id);
        $post_autor_photo = get_field('post_autor_photo', 'user_' . $author_id);

    ?>
        <div class="post-author">
            <div class="post-author__img">
                <?php
                if ($post_autor_photo) : ?>
                    <img src="<?php echo esc_url($post_autor_photo['url']); ?>" alt="<?php echo esc_attr($post_autor_photo['alt']); ?>" />
                <?php endif; ?>

            </div>
            <div class="post-author__data">
                <div class="post-author__nameWrap">
                    <div class="post-author__name"><?php echo esc_html($author_name); ?></div>
                    <div class="post-author__surname"><?php echo esc_html($author_surname); ?></div>
                </div>
                <div class="post-author__position">
                    <?php if ($post_autor_position) : ?>
                        <?php echo $post_autor_position; ?>
                    <?php endif; ?>
                </div>
                <div class="post-author__phoneWrap">
                    <div class="post-author__phone">
                        <?php if ($post_autor_phone) : ?>
                            <a href="tel:<?php echo $post_autor_phone; ?>"><?php echo $post_autor_phone; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="post-author__email">
                        <?php if ($post_autor_email) : ?>
                            <a href="mailto:<?php echo $post_autor_email; ?>"><?php echo $post_autor_email; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="post-author__desc">
                    <?php if ($post_autor_desc) : ?>
                        <?php echo  $post_autor_desc; ?>
                    <?php endif; ?>
                </div>
                <div class="post-author__link">
                    <?php
                    if ($post_autor_link) :
                        $link_url =  $post_autor_link['url'];
                        $link_title =  $post_autor_link['title'];
                        $link_target =  $post_autor_link['target'] ?  $post_autor_link['target'] : '_self';
                    ?>
                        <a class="button-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                            <?php echo esc_html($link_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C24.0739 15.4824 24.0739 8.51759 19.7782 4.22182C15.4824 -0.0739429 8.51759 -0.0739426 4.22182 4.22182C-0.0739421 8.51759 -0.0739418 15.4824 4.22183 19.7782C8.51759 24.0739 15.4824 24.0739 19.7782 19.7782ZM20.4853 20.4853C25.1716 15.799 25.1716 8.20101 20.4853 3.51472C15.799 -1.17157 8.20101 -1.17157 3.51472 3.51472C-1.17157 8.20101 -1.17157 15.799 3.51472 20.4853C8.20101 25.1716 15.799 25.1716 20.4853 20.4853ZM7.73117 12.5698L15.4237 12.5698L11.1955 16.798L11.9026 17.5051L17.338 12.0698L11.9026 6.63448L11.1955 7.34159L15.4238 11.5698L7.73117 11.5698L7.73117 12.5698Z" fill="#1C203F"></path>
                            </svg></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>