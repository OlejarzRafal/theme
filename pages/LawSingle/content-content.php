<?php
// $children_prawo_gospodarcze = get_pages(array('child_of' => 53));
// $children_prawo_bankowe = get_pages(array('child_of' => 57));
// $children_pozostale = get_pages(array('child_of' => 3781));
?>


<div class="ls-content">
    <div class="ls-content__container">
        <div class="ls-content__sidebar">
            <div class="ls-content__mobile-hero">
                <span>Inne Usługi</span>
                <div id="close-mobile-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6.34386 4.22199C5.75808 3.63621 4.80833 3.63621 4.22254 4.22199C3.63676 4.80778 3.63676 5.75753 4.22254 6.34331L9.8794 12.0002L4.22254 17.657C3.63676 18.2428 3.63676 19.1926 4.22254 19.7783C4.80833 20.3641 5.75808 20.3641 6.34386 19.7783L12.0007 14.1215L17.6576 19.7783C18.2434 20.3641 19.1931 20.3641 19.7789 19.7783C20.3647 19.1926 20.3647 18.2428 19.7789 17.657L14.122 12.0002L19.7789 6.34331C20.3647 5.75753 20.3647 4.80778 19.7789 4.22199C19.1931 3.63621 18.2434 3.63621 17.6576 4.22199L12.0007 9.87885L6.34386 4.22199Z" fill="white" />
                    </svg>
                </div>
            </div>
            <ul id="accordion" class="accordion">
                <li class="accordion__item">
                    <div class="link">Prawo gospodarcze<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.29289 5.70711L7.65685 12.0711C8.04738 12.4616 8.68054 12.4616 9.07107 12.0711L15.435 5.70711C15.8256 5.31658 15.8256 4.68342 15.435 4.29289C15.0445 3.90237 14.4113 3.90237 14.0208 4.29289L8.36396 9.94975L2.70711 4.29289C2.31658 3.90237 1.68342 3.90237 1.29289 4.29289C0.902369 4.68342 0.902369 5.31658 1.29289 5.70711Z" fill="#484C58" />
                        </svg></div>
                    <?php
                    $args = array(
                        'child_of' => 53,
                        'sort_column' => 'menu_order',
                        'order' => 'ASC',
                    );
                    $children_pages = get_pages($args);
                    if ($children_pages) {
                        echo '<ul class="submenu">';
                        foreach ($children_pages as $child_page) {
                            $child_title = $child_page->post_title;
                            $child_link = get_permalink($child_page->ID);
                            echo '<li><a href="' . $child_link . '">' . $child_title . '</a></li>';
                        }
                        echo '</ul>';
                    }

                    ?>
                </li>
                <li class="accordion__item">
                    <div class="link">Prawo bankowe<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.29289 5.70711L7.65685 12.0711C8.04738 12.4616 8.68054 12.4616 9.07107 12.0711L15.435 5.70711C15.8256 5.31658 15.8256 4.68342 15.435 4.29289C15.0445 3.90237 14.4113 3.90237 14.0208 4.29289L8.36396 9.94975L2.70711 4.29289C2.31658 3.90237 1.68342 3.90237 1.29289 4.29289C0.902369 4.68342 0.902369 5.31658 1.29289 5.70711Z" fill="#484C58" />
                        </svg></div>
                    <?php
                    $args = array(
                        'child_of' => 57,
                        'sort_column' => 'menu_order'
                    );
                    $children_pages = get_pages($args);
                    if ($children_pages) {
                        echo '<ul class="submenu">';
                        foreach ($children_pages as $child_page) {
                            $child_title = $child_page->post_title;
                            $child_link = get_permalink($child_page->ID);
                            echo '<li><a href="' . $child_link . '">' . $child_title . '</a></li>';
                        }
                        echo '</ul>';
                    }

                    ?>
                </li>
                <li class="accordion__item">
                    <div class="link">Pozostała oferta<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.29289 5.70711L7.65685 12.0711C8.04738 12.4616 8.68054 12.4616 9.07107 12.0711L15.435 5.70711C15.8256 5.31658 15.8256 4.68342 15.435 4.29289C15.0445 3.90237 14.4113 3.90237 14.0208 4.29289L8.36396 9.94975L2.70711 4.29289C2.31658 3.90237 1.68342 3.90237 1.29289 4.29289C0.902369 4.68342 0.902369 5.31658 1.29289 5.70711Z" fill="#484C58" />
                        </svg></div>
                    <?php
                    $args = array(
                        'child_of' => 3781,
                        'sort_column' => 'menu_order'
                    );
                    $children_pages = get_pages($args);
                    if ($children_pages) {
                        echo '<ul class="submenu">';
                        foreach ($children_pages as $child_page) {
                            $child_title = $child_page->post_title;
                            $child_link = get_permalink($child_page->ID);
                            echo '<li><a href="' . $child_link . '">' . $child_title . '</a></li>';
                        }
                        echo '</ul>';
                    }

                    ?>
                </li>
            </ul>
            <a href="/kontakt" class="ls-content__cta">
                Skontakuj się z nami
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.22183 20.5619C8.51759 24.8576 15.4824 24.8576 19.7782 20.5619C24.0739 16.2661 24.0739 9.30128 19.7782 5.00552C15.4824 0.70975 8.51759 0.70975 4.22183 5.00552C-0.0739423 9.30128 -0.0739411 16.2661 4.22183 20.5619ZM3.51472 21.269C8.20101 25.9553 15.799 25.9553 20.4853 21.269C25.1716 16.5827 25.1716 8.9847 20.4853 4.29841C15.799 -0.387882 8.20101 -0.387882 3.51472 4.29841C-1.17157 8.9847 -1.17157 16.5827 3.51472 21.269ZM11.4302 8.51486L11.4302 16.2074L7.20198 11.9792L6.49488 12.6863L11.9302 18.1217L17.3655 12.6863L16.6584 11.9792L12.4302 16.2075V8.51486H11.4302Z" fill="#F4E7E7" />
                </svg>
            </a>
        </div>
        <div class="ls-content__btn-mobile">
            <a href="">
                Inne usługi<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.29289 5.70711L7.65685 12.0711C8.04738 12.4616 8.68054 12.4616 9.07107 12.0711L15.435 5.70711C15.8256 5.31658 15.8256 4.68342 15.435 4.29289C15.0445 3.90237 14.4113 3.90237 14.0208 4.29289L8.36396 9.94975L2.70711 4.29289C2.31658 3.90237 1.68342 3.90237 1.29289 4.29289C0.902369 4.68342 0.902369 5.31658 1.29289 5.70711Z" fill="#484C58" />
                </svg>
            </a>
        </div>
        <div class="ls-content__content default-content-style">
            <?php the_content(); ?>
        </div>
    </div>
</div>