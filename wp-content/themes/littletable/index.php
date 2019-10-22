<?php get_header(); ?>



<main>
    <section>
        <!-- 首頁標語 -->
        <div class="pb-row">
            <div class="col-phone-100">
                <div class="index-cover">
                    <div class="index-container">
                        <h1 class="_title">進度條線上課程範例</h1>
                        <div>
                            <a href="https://progressbar.tw/users/sign_in" target="_pb">
                                <button type="button" class="btn btn_light">
                                    登入
                                </button>
                            </a>
                            <a href="https://progressbar.tw/users/sign_up" target="_pb">
                                <button type="button" class="btn btn_dark">
                                    註冊
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!-- cards -->
        <div class="pb-container">
            <div class="pb-row">
                <?php
                $args = array(
                    'numberposts' => 2,
                    'post_type' => 'product'
                );

                $latest_products = get_posts($args);

                // var_dump($latest_products);

                foreach ($latest_products as $product) {
                    $image = get_the_post_thumbnail($product);
                    $link = get_permalink($product);
                    ?>
                    <div class="col-phone-100 col-tablet-50">
                        <div class="card">
                            <div class="_image">
                                <div class="ratio_3_2">
                                    <img class="ratio_content" src=<?php echo $image; ?>>
                                </div>
                            </div>
                            <div class="_content">
                                <a class="_link" href=<?php echo $link; ?> target="_pb">
                                    <h4 class="_title">
                                        <?php echo $product->post_title; ?>
                                    </h4>
                                </a>
                                <p class="_detail">
                                    <?php echo $product->post_content; ?>
                                </p>
                            </div>
                            <div class="_action">
                                <div class="_action_content">
                                    <a class="_link" href=<?php echo $link; ?> target="_pb">
                                        <button class="btn" type="button">
                                            閱讀更多
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section>
        <!-- video player -->
        <div class="pb-container">
            <div class="pb-row">
                <div class="col-phone-100 col-tablet-67">
                    <div class="video-player">
                        <div class="ratio_16_9">
                            <iframe id="video_player" class="ratio_content" src="https://www.youtube.com/embed/-TDjWe5xZ0w" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-phone-100 col-tablet-33">
                    <div class="video-list-container mdl-shadow--2dp">
                        <div class="ratio_8_9">
                            <ul class="ratio_content video-list">
                                <li class="_video" data-video="Enw2PhRe3Bg">
                                    JavaScript ES6 與 React 課程介紹
                                </li>
                                <li class="_video" data-video="HJwt0fnadUg">
                                    [WordPress] 接案最方便的網站課程介紹
                                </li>
                                <li class="_video" data-video="RUZ7gCo7gws">
                                    Linux雲端伺服器，用AWS暸解Apache與Nginx
                                </li>
                                <li class="_video" data-video="IVWkKn_8GiQ">
                                    [Ruby On Rails] 新創公司最愛的後台網站框架課程介紹
                                </li>
                                <li class="_video" data-video="XN031PuViqI">
                                    [Bootstrap 3] 安裝與開始使用Bootstrap 3
                                </li>
                                <li class="_video" data-video="-TDjWe5xZ0w">
                                    [Git][免費空間] 將靜態網頁放上Github Page(也就是現在的網站)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="remove_padding">
        <!-- image links -->
        <div class="pb-container">
            <div class="pb-row">
                <div class="col-phone-100 col-tablet-50 col-desktop-25">
                    <a href="https://progressbar.tw">
                        <div class="ratio_3_2">
                            <img class="ratio_content" src="\wp-content\themes\littletable\assets\imgs/small-card1.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-phone-100 col-tablet-50 col-desktop-25">
                    <a href="https://progressbar.tw">
                        <div class="ratio_3_2">
                            <img class="ratio_content" src="\wp-content\themes\littletable\assets\imgs/small-card2.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-phone-100 col-tablet-50 col-desktop-25 hidden-on-phone">
                    <a href="https://progressbar.tw">
                        <div class="ratio_3_2">
                            <img class="ratio_content" src="\wp-content\themes\littletable\assets\imgs/small-card3.jpg">
                        </div>
                    </a>
                </div>
                <div class="col-phone-100 col-tablet-50 col-desktop-25 hidden-on-phone">
                    <a href="https://progressbar.tw">
                        <div class="ratio_3_2">
                            <img class="ratio_content" src="\wp-content\themes\littletable\assets\imgs/small-card4.jpg">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>