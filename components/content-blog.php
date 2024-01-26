<section class="c-blog">
    <div class="c-blog__container">
        <div class="c-blog-top">
            <div class="c-blog-top__left">
                <h2 class="c-blog-top__title">Blog</h2>
                <p class="c-blog-top__text">To może Cię zainteresować</p>
            </div>
            <div class="c-blog-top__right">
                <a href="/blog" class="c-blog-top__link">
                    Więcej wpisów na blogu
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C24.0739 15.4824 24.0739 8.51759 19.7782 4.22182C15.4824 -0.0739429 8.51759 -0.0739426 4.22182 4.22182C-0.0739421 8.51759 -0.0739418 15.4824 4.22183 19.7782C8.51759 24.0739 15.4824 24.0739 19.7782 19.7782ZM20.4853 20.4853C25.1716 15.799 25.1716 8.20101 20.4853 3.51472C15.799 -1.17157 8.20101 -1.17157 3.51472 3.51472C-1.17157 8.20101 -1.17157 15.799 3.51472 20.4853C8.20101 25.1716 15.799 25.1716 20.4853 20.4853ZM7.73117 12.5698L15.4237 12.5698L11.1955 16.798L11.9026 17.5051L17.338 12.0698L11.9026 6.63448L11.1955 7.34159L15.4238 11.5698L7.73117 11.5698L7.73117 12.5698Z" fill="#1C203F" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="c-blog-list">
            <div class="swiper-wrapper">
                <?php
                foreach (range(0, 10) as $index) {
                    // Your code here
                    echo '
            <div class="swiper-slide">
              <a href="" class="c-blog-list__item blog-item">
                <div class="blog-item__image">
                  <img src="http://khm-kancelaria.local/wp-content/uploads/2024/01/HEADER_x5F_HOME_x5F_VE_xA0_Obraz-min-scaled.jpg" alt="">
                </div>
                <div class="blog-item__content">
                  <span>Olaf Maciejowski</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="4" height="5" viewBox="0 0 4 5" fill="none">
                    <circle cx="2" cy="2.5" r="2" fill="#484C58" />
                  </svg>
                  <span>5.04.2023</span>
                </div>
                <div class="blog-item__title">Prawomocna wygrana z mBankiem w niecałe 13 miesięcy</div>
              </a>
            </div>
            ';
                }
                ?>
            </div>
            <div class="c-blog__footer">
                <div class="c-blog__controls">
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                            <path d="M23.0256 10.025L3.73207 10.0254L11.9754 1.78223L10.5968 0.403664L7.86365e-05 11.0003L10.5968 21.5968L11.9754 20.2183L3.73202 11.975L23.0256 11.9745L23.0256 10.025Z" fill="#A7A7A7" />
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22" fill="none">
                            <path d="M0.974368 11.975L20.2679 11.9746L12.0246 20.2178L13.4032 21.5963L23.9999 10.9997L13.4032 0.403155L12.0246 1.78172L20.268 10.025L0.974368 10.0255L0.974368 11.975Z" fill="#FDEFEF" />
                        </svg>
                    </div>
                </div>
                <div class="c-blog__pagination">
                    <div class="swiper-pagination"></div>
                </div>
                <div class="c-blog__scrollbar">
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>

            <div class="c-blog-more">
                <a href="/blog" class="c-blog-top__link">
                    Więcej wpisów na blogu
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C24.0739 15.4824 24.0739 8.51759 19.7782 4.22182C15.4824 -0.0739429 8.51759 -0.0739426 4.22182 4.22182C-0.0739421 8.51759 -0.0739418 15.4824 4.22183 19.7782C8.51759 24.0739 15.4824 24.0739 19.7782 19.7782ZM20.4853 20.4853C25.1716 15.799 25.1716 8.20101 20.4853 3.51472C15.799 -1.17157 8.20101 -1.17157 3.51472 3.51472C-1.17157 8.20101 -1.17157 15.799 3.51472 20.4853C8.20101 25.1716 15.799 25.1716 20.4853 20.4853ZM7.73117 12.5698L15.4237 12.5698L11.1955 16.798L11.9026 17.5051L17.338 12.0698L11.9026 6.63448L11.1955 7.34159L15.4238 11.5698L7.73117 11.5698L7.73117 12.5698Z" fill="#1C203F" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>