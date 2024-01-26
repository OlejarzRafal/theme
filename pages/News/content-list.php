<section data-id="news-list">
  <div class="news-list__container">
    <div class="news-list__top">
      <div class="breadcrumbs">
        <a href="<?php echo get_home_url(); ?>">Strona główna</a>
        <span class="breadcrumbs__separator"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 5 10" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.45463 9.03363C0.59688 9.04605 0.743964 8.99841 0.853414 8.88896L4.38895 5.35343C4.58437 5.158 4.58368 4.84105 4.38895 4.64632L0.853414 1.11078C0.658683 0.916054 0.341728 0.915363 0.146307 1.11078C-0.0491141 1.30621 -0.0484236 1.62316 0.146307 1.81789L3.32829 4.99987L0.146307 8.18185C-0.0491141 8.37727 -0.0484236 8.69423 0.146307 8.88896C0.231933 8.97459 0.341383 9.02258 0.45463 9.03363Z" fill="#1C203F" />
          </svg></span>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
    </div>
    <h1 class="news-list__title"><?php the_title(); ?></h1>
    <div class="news-list__main">
      <?php
      foreach (range(0, 100) as $index) {
        // Your code here
        echo '
              <a href="/" class="news-list__item news-item">
                <div class="news-item__image">
                  <img src="http://khm-kancelaria.local/wp-content/uploads/2024/01/ASSET_x5F_ZESPOL_xA0_Obraz-min.jpg"
                    alt="">
                </div>
                <span class="news-item__date">5.04.2023</span>
                <h3 class="news-item__title">International law can refer to three public international law, private.</h3>
                <p class="news-item__text">International law can refer to three public international law, private international
                  law or conflict of laws and the law of supra. </p>
                <div class="news-item__button">
                  Przeczytaj więcej
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M20.5282 19.7818C24.8239 15.486 24.8239 8.52119 20.5282 4.22542C16.2324 -0.0703418 9.26759 -0.0703415 4.97182 4.22543C0.676058 8.52119 0.676058 15.486 4.97183 19.7818C9.26759 24.0775 16.2324 24.0775 20.5282 19.7818ZM21.2353 20.4889C25.9216 15.8026 25.9216 8.20461 21.2353 3.51832C16.549 -1.16797 8.95101 -1.16797 4.26472 3.51832C-0.421574 8.20461 -0.421573 15.8026 4.26472 20.4889C8.95101 25.1752 16.549 25.1752 21.2353 20.4889ZM8.48117 12.5734L16.1737 12.5734L11.9455 16.8016L12.6526 17.5087L18.088 12.0734L12.6526 6.63809L11.9455 7.34519L16.1738 11.5734L8.48117 11.5734L8.48117 12.5734Z"
                      fill="#1C203F" />
                  </svg>
                </div>
              </a>
            ';
      }
      ?>
    </div>
    <div class="news-list__pagination"></div>
  </div>
</section>