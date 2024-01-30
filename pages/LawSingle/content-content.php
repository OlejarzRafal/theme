<?php
$children_prawo_gospodarcze = get_pages(array('child_of' => 53));
$children_prawo_bankowe = get_pages(array('child_of' => 57));
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
                    if ($children_prawo_gospodarcze) {
                        echo '<ul class="submenu">';
                        foreach ($children_prawo_gospodarcze as $child_g) {
                            $child_title = $child_g->post_title;
                            $child_link = get_permalink($child_g->ID);
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
                    if ($children_prawo_bankowe) {
                        echo '<ul class="submenu">';
                        foreach ($children_prawo_bankowe as $child_b) {
                            $child_title = $child_b->post_title;
                            $child_link = get_permalink($child_b->ID);
                            echo '<li><a href="' . $child_link . '">' . $child_title . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </li>
            </ul>
        </div>
        <div class="ls-content__btn-mobile">
            <a href="">
                Inne usługi<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.29289 5.70711L7.65685 12.0711C8.04738 12.4616 8.68054 12.4616 9.07107 12.0711L15.435 5.70711C15.8256 5.31658 15.8256 4.68342 15.435 4.29289C15.0445 3.90237 14.4113 3.90237 14.0208 4.29289L8.36396 9.94975L2.70711 4.29289C2.31658 3.90237 1.68342 3.90237 1.29289 4.29289C0.902369 4.68342 0.902369 5.31658 1.29289 5.70711Z" fill="#484C58" />
                </svg>
            </a>
        </div>
        <div class="ls-content__content">
            <?php the_content(); ?>
        </div>
    </div>
</div>